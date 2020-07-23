<?php

function listAction(): void
{
    $posts = getAllPosts();
    require 'templates/list.php';
}

function showAction($id): void
{
    $post = getPostById($id);
    require 'templates/show.php';
}
