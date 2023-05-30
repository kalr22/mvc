<?php

namespace App\Card;

use App\Card\Card;

class Deck {
    protected $numbers;
    protected $signs;
    protected $cardObject;

    public function __construct() {
        $this->numbers = ["2", "3", "4", "5", "6", "7", "8", "9", "10", "&#127163;", "&#9813;", "&#9812;", "A"];
        $this->signs = ["&#9829;", "&#11049;", "&#9827;", "&#9824;"];
        $this->cardObject = [];
    }

    public function init() {
        $counter = 0;
        for ($i = 0; $i < count($this->signs); $i++) {
            $currSign = $this->signs[$i];
            for ($j = 0; $j < count($this->numbers); $j++) {

                $card = new Card();
                $currNum = $this->numbers[$j];

                $textColor = ( $i < 2 ) ? ("red") : ("black");
                $card->number = "<span style='color: $textColor;'>$currNum</span>";
                $card->sign = "<span style='color: $textColor;'>$currSign</span>";

                $card->priority = $counter;
                $counter = $counter + 1;

                $this->cardObject[] = $card;
            }
        }
    }
    public function getCards(): array {
        return $this->cardObject;
    }

    public function shuffleCards() {
        shuffle($this->cardObject);
    }

    public function getCardCount(): int {
        return count($this->cardObject);
    }

    public function drawCard(): object {
        // Draw a random card from the deck.
        $drawnInt = array_rand($this->cardObject);
        $drawnCard = $this->cardObject[$drawnInt];
        // Remove the drawn card from the deck.
        array_splice($this->cardObject, $drawnInt, 1);
        // Return the drawn card.
        return $drawnCard;
    }

    public function sortCards() {
        // Extract the "priority" property value from each object
        $priorities = array_column($this->cardObject, 'priority');
        // Sort the array by the extracted property values
        array_multisort($priorities, $this->cardObject);
    }
}
