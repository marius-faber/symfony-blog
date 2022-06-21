<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(PostRepository $repository): Response {

        $posts = $repository->findAll();

        return $this->render('blog/homepage.html.twig', [
            'posts' => $posts,
        ]);
    }
}