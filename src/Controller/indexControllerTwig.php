<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class indexControllerTwig extends AbstractController
{
    #[Route("/", name: "home")]
    public function home(): Response
    {
        return $this->render('index.html.twig');
    }
}
