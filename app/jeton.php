<?php

class gestionJeton
{
    public $jetonRouge = 0;
    public $jetonBleu = 0;
    public $jetonVert = 0;
    public $jetonOr = 0;
    public $jetonBlanc = 0;
    public $jetonNoir = 0;
    public $total = 0;

    public function __construct()
    {
        echo "construct";
    }

    public function addJeton(string $color, int $value = 1)
    {
        if (($this->total + $value) > 10)
        {
            return false;
        }
                switch ($color) {
                    case 'rouge':
                        $this->jetonRouge += $value;
                        break;

                    case 'bleu':
                        $this->jetonBleu += $value;
                        break;

                    case 'vert':
                        $this->jetonVert += $value;
                        break;

                    case 'or':
                        $this->jetonOr += $value;
                        break;

                    case 'blanc':
                        $this->jetonBlanc += $value;
                        break;

                    case 'noir':
                        $this->jetonNoir += $value;
                        break;
                    default:
                        return false;
                }
                $this->total += $value;
                return true;
    }
}