<?php

use Test\GameStart;

require __DIR__.'/../test/gameStart.php';

$test = new GameStart(false, 2);
$test->test_start_game();



echo "Bonjour !";