INSERT INTO user (username, avatar, description )
VALUES
     ('Ваня Денисов', './pictures/VanyaDenisov.png', 'Привет! Я Ваня'),
    ('Лиза Дёмина', './pictures/Liza_Diemina.png', 'Привет, я Лиза');

INSERT INTO post (user_id, image, subtitle, likes, posted_at)
VALUES
    (
        1,
        './pictures/FirstPhoto_post.png',
        'Так красиво сегодня на улице! Настоящая зима))',
        203,
        '2024-12-12 00:00:00'
    ),
    (
        2,
        './pictures/SecondPhoto_post.png',
        'Весна',
        111,
        '2025-03-05 00:00:00'
    );

INSERT INTO post_images (post_id, image, position) VALUES
    (1, './pictures/FirstPhoto_post.png', 0),
    (1, './pictures/FirstPhoto_post.png', 1),
    (1, './pictures/FirstPhoto_post.png', 2),
    (2, './pictures/SecondPhoto_post.png', 0);