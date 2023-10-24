<?php

namespace Test;

class GameStart
{
  
  public $gameState;
  public $playerId;


  public function __construct(bool $gameState, int $playerId)
  {
    $this->gameState = $gameState;
    $this ->playerId = $playerId;
  }

  public function test_start_game() 
  { 
    return  'OKOKOKOKOKOKOK';
  
  }

}
?>