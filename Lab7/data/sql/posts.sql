INSERT INTO     user (username, avatar )
VALUES
    ('Ваня Денисов', './pictures/VanyaDenisov.png'),
    ('Лиза Дёмина', './pictures/Liza_Diemina.png');

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