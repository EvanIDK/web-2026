<?php
$posts = [
    [
        'id' => 1,
        'title' => 'Ваня Денисов',
        'subtitle' => 'Так красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в гор...',
        'img_modifier' => './pictures/FirstPhoto_post.png',
        'author' => './pictures/VanyaDenisov.png',
        'image_alt' => 'Зима',
        'likes' => '203',
        'date' => mktime(0, 0, 0, 12, 12, 2024),
        // другие свойства этого поста
    ],
    [
        'id' => 2,
        'title' => 'Лиза Дёмина',
        'subtitle' => 'Весна',
        'img_modifier' => './pictures/SecondPhoto_post.png',
        'author' => './pictures/Liza_Diemina.png',
        'image_alt' => 'Цветы',
        'likes' => '111',
        'date' => mktime(0, 0, 0, 24, 12, 2025),
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
        <title>home</title>
        <link href="./home.css" rel="stylesheet">
    </head>
    <body>
        <nav class="sidebar">
            <a class="sidebar__icon" href="#"> <img src="./pictures/menu_icon.png" alt="меню"> </a>
            <a class="sidebar__icon" href="#"> <img src="./pictures/profile_icon.png" alt="профиль"> </a>
            <a class="sidebar__icon" href="#"> <img src="./pictures/add_post_icon.png" alt="добавить"> </a>
        </nav>
        <main class="content">
            <?php foreach ($posts as $post) {
                include 'post_preview.php';
            }
            ?>
        </main>
    </body>
</html>

<!-- 
хедер один на странице и с футером, тут лучше nav
footer поменять на div
заглушки на ссылки


-->