<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Card\Deck;

class cardDeckTwig extends AbstractController
{
    #[Route("/card/deck", name: "deck")]
    public function deck(SessionInterface $session): Response
    {
        // Get the class instance from session variable.
        $card = $session->get("cards");

        if (!$card) {
            // Create a new instance of the Deck class.
            $card = new Deck();
            // Run the init method to create the cards.
            $card->init();
        }
        // Sort the cards
        $card->sortCards();

        $data = [
            "cards" => $card->getCards(),
            "count" => $card->getCardCount()
        ];
        return $this->render('deck.html.twig', $data);
    }
}