<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use App\Card\Deck;

class GetDeckJson extends AbstractController
{
    #[Route("/api/deck", name: "api_deck")]
    public function getDeck(SessionInterface $session): Response
    {
        // Get the class instance from session variable.
        $card = $session->get("cards");

        if (!$card) {
            // Create a new instance of the Deck class.
            $card = new Deck();
            // Run the init method to create the cards.
            $card->init();
        }

        $data = [
            "cards" => $card->getCards(),
            "count" => $card->getCardCount()
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}