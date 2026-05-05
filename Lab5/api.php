<?php
$method = $_SERVER['REQUEST_METHOD'];

if ($method !== 'POST') {
    header('Content-Type: application/json');
    http_response_code(405);
    echo json_encode(['error' => 'Only POST requests are allowed']);
    exit;
}

$body = file_get_contents('php://input');
$data = json_decode($body, true);

if ($data === null) {
    header('Content-Type: application/json');
    http_response_code(400);
    echo json_encode(['error' => 'Invalid JSON']);
    exit;
}

if (empty($data['image'])) {
    header('Content-Type: application/json');
    http_response_code(400);
    echo json_encode(['error' => 'Missing image field']);
    exit;
}

$imageData = base64_decode($data['image']);
$filename = __DIR__ . '/static/' . ($data['filename'] ?? uniqid() . '.jpg');
file_put_contents($filename, $imageData);

header('Content-Type: application/json');
http_response_code(200);
echo json_encode(['success' => true, 'path' => $filename]);

//именования данных в массиве, три переделать. ip докинуть проверки на создание файлов 4 задание
 