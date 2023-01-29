<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/blog")
 */

class BlogController
{

     #[Route('/posts/{id}.{_format}', requirements: ['id'=>'\d', '_format'=>'html|json'], methods: ['POST', 'PATCH'])]

    public function savePost(int $id): Response
    {
        return new Response('<body>On sauvegarde l\'article n°'.$id.'</body>');
    }

    /**
     * @Route("/posts/{id}.{_format}", requirements={"id"="\d", "_format"="html|json"})
     */
    public function showPost(int $id): Response
    {
        return new Response('<body>Article n°'.$id.'</body>');
    }
}