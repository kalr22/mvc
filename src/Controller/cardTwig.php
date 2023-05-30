<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class cardTwig extends AbstractController
{
    #[Route("/card", name: "card")]
    public function card(): Response
    {
        // $number = random_int(0, 100);

        // $data = [
        //     'number' => $number
        // ];

        // return $this->render('lucky_number.html.twig', $data);
        return $this->render('card.html.twig');
    }
}