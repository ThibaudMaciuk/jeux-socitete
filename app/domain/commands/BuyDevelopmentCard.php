<?php

namespace App;

use App\Adapters\PlayerRepository;
use App\Adapters\CardRepository;

require __DIR__.'/../app/adapters/PlayerRepository.php';
require __DIR__.'/../app/adapters/CardRepository.php';

class BuyDevelopmentCard
{
    private $playerRepo;
    private $cardRepo;

    public function __construct(PlayerRepository $playerRepo, CardRepository $cardRepo) {
        $this->playerRepo = $playerRepo;
        $this->cardRepo = $cardRepo;
    }

    public function execute()
    {
        
    }
}
