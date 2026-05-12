<?php
$postId = (int)$_GET['id'];

$post = [
    'id' => 1,
    'author_name' => 'Ваня Денисов',
    'author_avatar' => './pictures/VanyaDenisov.png',
    'img_modifier' => './pictures/FirstPhoto_post.png',
    'image_alt' => 'Зима',
    'image_count' => '1/3',
    'subtitle' => 'Так красиво сегодня на улице! Настоящая зима))',
    'likes' => 203,
    'date' => mktime(0, 0, 0, 12, 12, 2024),
];
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
                <img class="post__image" src="<?= $post['img_modifier'] ?>" alt="<?= $post['image_alt'] ?>">
                <span class="post__image-counter"><?= $post['image_count'] ?></span>
            </div>

            <div class="post__footer">
                <button class="post__reaction">❤️ <?= $post['likes'] ?></button>
                <div class="post__caption">
                    <?= $post['subtitle'] ?>
                </div>
                <span class="post__time"><?= date('d.m.Y H:i', $post['date']) ?></span>
            </div>
        </article>

        <a href="./index.php">Назад ко всем постам</a>
    </main>
</body>
</html>