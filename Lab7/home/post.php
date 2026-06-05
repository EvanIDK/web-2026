<?php
$postId = (int)$_GET['id'];

require_once 'database.php';
 
$connection = connectDatabase();
$post = findPostInDataBase($connection, $postId);

if (!$post) {
    http_response_code(404);
    echo "Ошибка 404: Пост не найден";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
    <title>Пост №<?= $postId ?></title>
    <link href="./home.css" rel="stylesheet">
</head>
<body>
    <nav class="sidebar">
        <a class="sidebar__icon" href="#"> <img src="./pictures/menu_icon.png" alt="меню"> </a>
        <a class="sidebar__icon" href="#"> <img src="./pictures/profile_icon.png" alt="профиль"> </a>
        <a class="sidebar__icon" href="#"> <img src="./pictures/add_post_icon.png" alt="добавить"> </a>
    </nav>
    <main class="content">
        <h1>Просмотр поста №<?= $postId ?></h1>
        <article class="post">
            <div class="post__header">
                <div class="post__user">
                    <img class="post__user_avatar" src="<?= $post['author_avatar'] ?>" alt="<?= $post['author_name'] ?>">
                    <span class="post__user_author"><?= $post['author_name'] ?></span>
                </div>
            </div>

            <div class="post__image-container">
                <img class="post__image" src="<?= $post['image'] ?>" alt="<?= $post['image_alt'] ?>">
                <span class="post__image-counter"><?= $post['image_count'] ?? ''?></span>
            </div>

            <div class="post__footer">
                <button class="post__reaction">❤️ <?= $post['likes'] ?></button>
                <div class="post__caption">
                    <?= $post['subtitle'] ?>
                </div>
                <span class="post__time">
                    <?= date('d.m.Y H:i', strtotime($post['posted_at'])) ?>
                </span>

            </div>
        </article>

        <a href="./index.php">Назад ко всем постам</a>
    </main>
</body>
</html>