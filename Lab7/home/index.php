<?php

require_once 'database.php';

$connection = connectDatabase();
$posts = getAllPosts($connection);
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
            } ?>
        </main>
    </body>
</html>
