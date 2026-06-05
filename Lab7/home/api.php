<?php

header('Content-Type: application/json');

require_once 'database.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Запросы разрешены только методом POST'], JSON_UNESCAPED_UNICODE);
    exit;
}

$jsonData = $_POST['data'] ?? file_get_contents('php://input');
$data = json_decode($jsonData, true);

if (!$data) {
    http_response_code(400);
    echo json_encode(['error' => 'Некорректный JSON'], JSON_UNESCAPED_UNICODE);
    exit;
}

$user_id = $data['user_id'];
$subtitle = $data['subtitle']; 

if (!$user_id) {
    http_response_code(400);
    echo json_encode(['error' => 'user_id обязателен'], JSON_UNESCAPED_UNICODE);
    exit;
}

if (!isset($_FILES['image'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Файл image обязателен'], JSON_UNESCAPED_UNICODE);
    exit;
}

$image = $_FILES['image'];

if ($image['error'] !== UPLOAD_ERR_OK) {
    http_response_code(400);
    echo json_encode(['error' => 'Ошибка загрузки файла'], JSON_UNESCAPED_UNICODE);
    exit;
}


$imagesDir = 'pictures';

if (!is_dir($imagesDir)) {
    mkdir($imagesDir, 0777, true);
}

$fileName = time() . '_' . basename($image['name']);
$filePath = './' . $imagesDir . '/' . $fileName; // Сохраняем в базу вид: ./pictures/12345_photo.png

if (!move_uploaded_file($image['tmp_name'], $filePath)) {
    http_response_code(500);
    echo json_encode(['error' => 'Не удалось сохранить файл'], JSON_UNESCAPED_UNICODE);
    exit;
}

try {
    $connection = connectDatabase();
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Ошибка подключения к БД'], JSON_UNESCAPED_UNICODE);
    exit;
}

$stmt = $connection->prepare("
    INSERT INTO post (user_id, image, subtitle)
    VALUES (:user_id, :image, :subtitle)
");

if (!$stmt) {
    http_response_code(500);
    echo json_encode(['error' => 'Ошибка подготовки запроса'], JSON_UNESCAPED_UNICODE);
    exit;
}

$result = $stmt->execute([
    ':user_id'  => $user_id,
    ':image'    => $filePath,
    ':subtitle' => $subtitle
]);

if (!$result) {
    http_response_code(500);
    echo json_encode(['error' => 'Ошибка выполнения запроса'], JSON_UNESCAPED_UNICODE);
    exit;
}

echo json_encode([
    'status' => 'success',
    'message' => 'Пост успешно создан',
    'post_id' => $connection->lastInsertId(),
    'image' => $filePath
], JSON_UNESCAPED_UNICODE);

exit;
