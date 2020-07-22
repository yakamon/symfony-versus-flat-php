<?php

/**
 * @return PDO
 */
function openDatabaseConnection(): PDO
{
    $connection = new PDO('mysql:host=mysql;dbname=my_db', 'root', 'root');

    return $connection;
}

/**
 * @param PDO
 */
function closeDatabaseConnection(PDO &$connection): void
{
    $connection = null;
}

/**
 * @return array
 */
function getAllPosts(): array
{
    $connection = openDatabaseConnection();

    $result = $connection->query('SELECT id, title FROM post');

    $posts = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $posts[] = $row;
    }

    closeDatabaseConnection($connection);

    return $posts;
}
