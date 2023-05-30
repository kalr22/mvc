<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class cardDeckNumberTwig extends AbstractController
{
    #[Route("/card/deck/draw/{num<\d+>}", name: "drawNumber")]
    public function drawNumber(int $num, SessionInterface $session): Response
    {
        if ($num > 52 || $num < 1) {
            throw new \Exception("Can not roll more than 52 cards or under 1 card!");
        }

        // Get the class instance from session variable.
        $card = $session->get("cards");

        // Throw exception when there's no more card in the deck!
        if ($card->getCardCount() < $num) {
            throw new \Exception("There are no more cards in the deck! Go to shuffle to get a new deck of cards!");
        }

        $numCards = [];
        for ($i = 0; $i < $num; $i++) {
            $numCards[] = $card->drawCard();
        }

        $data = [
            'numCards' => $numCards,
            "cards" => $card->getCards(),
            "count" => $card->getCardCount()
        ];

        // return $this->render('lucky_number.html.twig', $data);
        return $this->render('drawnumber.html.twig', $data);
    }
}