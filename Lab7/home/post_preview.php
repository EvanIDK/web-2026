<div class="post">
    <div class="post__header">
        <div class="post__user">
            <img class="post__user_avatar" src="<?= $post['author_avatar'] ?>" alt="<?= $post['author_name'] ?>">
            <span class="post__user_author"><?= $post['author_name'] ?></span>
        </div>
        <a class="post__user_edit-icon" title='<?= $post['author_name'] ?>' href="post.php?id=<?= $post['id'] ?>">
            <img src="./pictures/Edit.png" alt="редактировать">
        </a>

    </div>
    <div class="post__image-container">
        <img class="post__image" src="<?= $post['image'] ?>" alt="<?= $post['image_alt'] ?? 'Изображение' ?>">
        <span class="post__image-counter"><?= $post['image_count'] ?? '' ?></span>
    </div>

    <div class="post__footer">
        <button class="post__reaction">❤️ <?= $post['likes'] ?></button>
        <div class="post__caption">
            <?= $post['subtitle'] ?>
        </div>
        <span class="post__more">ещё</span>
        <span class="post__time">
            <?= date('d.m.Y H:i', strtotime($post['posted_at'])) ?>
        </span>

    </div>
</div>