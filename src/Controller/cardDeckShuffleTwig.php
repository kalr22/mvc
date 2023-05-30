<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Card\Deck;

class cardDeckShuffleTwig extends AbstractController
{
    #[Route("/card/deck/shuffle", name: "shuffle")]
    public function shuffle(SessionInterface $session): Response
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
        return $this->render('shuffle.html.twig', $data);
    }
}

