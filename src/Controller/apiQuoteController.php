<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class apiQuoteController extends AbstractController
{
    #[Route("/api/quote", name: "quote")]
    public function quote(): Response
    {
        $number = random_int(0, 2);
        $quotes = ["The future starts today, not tomorrow", "Today is the perfect day to be happy", "Wake up, Be awesome, Inspire someone"];
        $date = date('Y-m-d h:i:sa');

        $data = [
            'todays-date' => $date,
            'todays-quote' => $quotes[$number],
            'number' => $number
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}