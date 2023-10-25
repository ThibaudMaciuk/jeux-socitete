<?php 

namespace App\Adapters;

use App\Card;

class CardRepository {
    private $cards = [];
    public function feed(Card $card) {
        $this->cards[] = $card;
    }
     
}

?>