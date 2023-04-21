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
        // $number = random_int(0, 100);

        // $data = [
        //     'number' => $number
        // ];

        // return $this->render('lucky_number.html.twig', $data);
        return $this->render('index.html.twig');
    }
}
