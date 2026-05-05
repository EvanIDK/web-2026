<div class="post">
    <div class="post__header">
        <div class="post__user">
            <img class="post__user_avatar" src="<?= $post['author'] ?>" alt="<?= $post['title'] ?>">
            <span class="post__user_author"><?= $post['title'] ?></span>
        </div>
        <a class="post__user_edit-icon" title='<?= $post['title'] ?>' href="post.php?id=<?= $post['id'] ?>"> <img src="./pictures/Edit.png" alt="редактировать">
        </a>
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
            <span class="post__more">ещё</span>
            <span class="post__time">
            <?= date('d.m.Y H:i', $post['date']) ?>
        </span>
        </div>
</div>