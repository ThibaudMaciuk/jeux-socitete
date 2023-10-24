<?php

namespace Campus\Test;

class StockJeton
{
  
  public $jetons = [
            'rouge' => 0,
            'jaune' => 0,
            'bleu' => 0,
            'noir' => 0,
            'blanc' => 0,
            'vert' => 0,
        ];
  public $playerId;


  public function __construct(bool $gameState, int $playerId)
  {
  }

  public function test_start_game() 
  { 
  
  }

}
?>