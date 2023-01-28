<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
class HomeController
{
    #[Route('/')]
    public function  number()
    {
        $number = rand(0, 100);

        dd($number);
    }
}