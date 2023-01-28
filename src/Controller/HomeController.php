<?php
// To init server : php -S 127.0.0.1:8000 -t public/
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class HomeController extends AbstractController
{
    #[Route('/')]
    public function  number()
    {
        $number = rand(0, 100);

        return $this->render('/base.html.twig', [
            "number" => $number
        ]);

    }
}