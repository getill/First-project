<?php
// To init server : php -S 127.0.0.1:8000 -t public/
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     * @Route("/", name="index")
     * @Route("/contact", name="contact")
     *
     * @return response
     */
    public function index(): response
    {
        return new Response('<body>Hello world!</body>');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return new Response('<body>Vous êtes sur la page de contact</body>');
    }

    /**
     * @Route("/bonjour/{name}", name="hello")
     *
     * @return Response
     */
    public function hello(string $name)
    {
        return new Response('<body>Bonjour '.$name.'</body>');
    }
}