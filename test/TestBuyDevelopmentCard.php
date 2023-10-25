<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Player;
use App\Card;
use App\Adapters\PlayerRepository;

require __DIR__.'/../app/player.php';
require __DIR__.'/../app/card.php';
require __DIR__.'/../app/adapters/playerRepository.php';

final class TestBuyDevelopmentCard extends TestCase
{
  public function test_php_unit(): void 
  {
    $name = "php";

    $value = "php";

    $this->assertSame($value, $name);
    
  }

  public function test_buy_with_token(): void
  {
    $player = new Player(1,1,1,1,1,1);
    $card = new Card(1,1,1,1,1,1);
    $this->assertGreaterThanOrEqual($player, $card);
  }

}