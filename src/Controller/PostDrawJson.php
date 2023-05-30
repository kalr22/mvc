<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PostDrawJson extends AbstractController
{
    #[Route("/api/deck/draw", name: "drawDeck")]
    public function drawDeck(SessionInterface $session): Response
    {
        // Get the class instance from session variable.
        $card = $session->get("cards");

        // Throw exception when there's no more card in the deck!
        if ($card->getCardCount() < 1) {
            throw new \Exception("There are no more cards in the deck! Go to shuffle to get a new deck of cards!");
        }

        $drawnCard = $card->drawCard();

        // Save it again in session
        $session->set("cards", $card);

        $data = [
            "drawnCard" => $drawnCard,
            "count" => $card->getCardCount(),
            "cards" => $card->getCards()
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}