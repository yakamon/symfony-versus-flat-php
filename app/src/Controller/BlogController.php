<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
    /**
     * @return Response
     */
    public function list(): Response
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
        return $this->render('blog/list.html.twig', ['posts' => $posts]);
    }

    /**
     * @param string $id
     * @return Response
     */
    public function view($id): Response
    {
        $post = $this->getDoctrine()->getRepository(Post::class)->find($id);

        if (!$post) {
            throw $this->createNotFoundException();
        }

        return $this->render('blog/view.html.twig', ['post' => $post]);
    }
}
