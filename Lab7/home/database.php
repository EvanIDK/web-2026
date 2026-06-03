<?php

function connectDatabase(): PDO
{
    $dsn = 'mysql:host=127.0.0.1;dbname=blog;charset=utf8mb4';
    $user = 'root';
    $password = '';

    return new PDO($dsn, $user, $password);
}

function getAllPosts(PDO $connection): array
{
    $query = <<<SQL
        SELECT
            post.id,
            post.image,
            post.subtitle,
            post.likes,
            post.posted_at,
            user.username AS author_name,
            user.avatar AS author_avatar
        FROM post
        JOIN user ON user.id = post.user_id
        SQL;

    $statement = $connection->query($query);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function findPostInDataBase(PDO $connection, int $id): ?array
{
    $query = <<<SQL
        SELECT
            post.id,
            post.image,
            post.subtitle,
            post.likes,
            post.posted_at,
            user.username AS author_name,
            user.avatar AS author_avatar
        FROM post
        JOIN user ON user.id = post.user_id
        WHERE post.id = $id
        SQL;

    $statement = $connection->query($query);
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    return $row ?: null;
}