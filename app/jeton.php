<?php

class gestionJeton
{
    public $jetonRouge = 0;
    public $jetonBleu = 0;
    public $jetonVert = 0;
    public $jetonOr = 0;
    public $jetonBlanc = 0;
    public $jetonNoir = 0;

    public function __construct()
    {
        echo "construct";
    }

    public function addJeton(string $color)
    {
            switch ($color) {
                case 'rouge':
                    $this->jetonRouge += 1;
                    return true;
                    
                case 'bleu':
                    $this->jetonBleu += 1;
                    return true;
                    
                case 'vert':
                    $this->jetonVert += 1;
                    return true;
                    
                case 'or':
                    $this->jetonOr += 1;
                    return true;
                    
                case 'blanc':
                    $this->jetonBlanc += 1;
                    return true;
                
                case 'noir':
                    $this->jetonNoir += 1;
                    return true;

                default:
                return false;
            }
    }
}

$addjeton = new gestionJeton();
$addjeton->addJeton('bleu');
