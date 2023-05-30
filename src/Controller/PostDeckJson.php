<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use App\Card\Deck;

class PostDeckJson extends AbstractController
{
    #[Route("/api/deck/shuffle", name: "shuffleDeck")]
    public function shuffleDeck(SessionInterface $session): Response
    {
        // Create a new instance of the Deck class.
        $card = new Deck();
        // Run the init method to create the cards.
        $card->init();
        // Shuffle cards
        $card->shuffleCards();
        // save it in session
        $session->set("cards", $card);

        $data = [
            "cards" => $card->getCards()
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}