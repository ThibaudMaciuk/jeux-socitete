<?php 

namespace App\Adapters;

use App\Player;

class PlayerRepository {
    private $players = [];
    public function feed(Player $player) {
        $this->players[] = $player;
    }
     
}




?>