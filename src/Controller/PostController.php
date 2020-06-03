<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/", name="post_list")
     */
    public function index()
    {
        $posts = $this->getDoctrine()
            ->getRepository(Post::class)
            ->findAll();
        return $this->render('home/index.html.twig', [
            'posts' => $posts,
        ]);
    }
}
