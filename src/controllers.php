<?php

use Symfony\Component\HttpFoundation\Response;

/**
 * @return Response
 */
function listAction(): Response
{
    $posts = getAllPosts();
    $html = render('templates/list.php', ['posts' => $posts]);
    return new Response($html);
}

/**
 * @return Response
 */
function showAction($id): Response
{
    $post = getPostById($id);
    $html = render('templates/show.php', ['post' => $post]);
    return new Response($html);
}

/**
 * @param string $path
 * @param array $args
 * @return string
 */
function render(string $path, array $args): string
{
    extract($args);
    ob_start();
    require $path;
    $html = ob_get_clean();

    return $html;
}
