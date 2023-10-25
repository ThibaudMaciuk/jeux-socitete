<?php

namespace App;

class Player {

    private $red_tokens;

    private $green_tokens;

    private $blue_tokens;

    private $black_tokens;

    private $white_tokens;

    private $yellow_tokens;

    public function __construct(int $red_tokens, int $green_tokens, int $blue_tokens, int $black_tokens, int $white_tokens, int $yellow_tokens) {

        $this->red_tokens = $red_tokens;
        $this->green_tokens = $green_tokens;
        $this->blue_tokens = $blue_tokens;
        $this->black_tokens = $black_tokens;
        $this->white_tokens = $white_tokens;
        $this->yellow_tokens = $yellow_tokens;
        
    }

}