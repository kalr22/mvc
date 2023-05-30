<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class aboutControllerTwig extends AbstractController
{
    #[Route("/about", name: "about")]
    public function number(): Response
    {
        return $this->render('about.html.twig');
    }
}