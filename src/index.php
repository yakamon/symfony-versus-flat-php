<?php
$connection = new PDO('mysql:host=mysql;dbname=my_db', 'root', 'root');
$result = $connection->query('SELECT id, title FROM post');

$posts = [];
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $posts[] = $row;
}

$connection = null;

require 'templates/list.php';
