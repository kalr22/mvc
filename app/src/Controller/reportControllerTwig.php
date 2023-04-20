<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class reportControllerTwig extends AbstractController
{
    #[Route("/report", name: "report")]
    public function report(): Response
    {
        // $number = random_int(0, 100);

        // $data = [
        //     'number' => $number
        // ];

        // return $this->render('lucky_number.html.twig', $data);
        return $this->render('report.html.twig');
    }
}