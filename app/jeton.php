<?php

class gestionJeton
{
    public $jetonRouge = 0;
    public $jetonBleu = 0;
    public $jetonVert = 0;
    public $jetonOr = 0;
    public $jetonBlanc = 0;
    public $jetonNoir = 0;
    private array $color = ['rouge', 'bleu', 'vert', 'or', 'blanc', 'noir'];

    public function __construct()
    {
        echo "construct";
    }

    public function addJeton(string $color)
    {
        if (in_array($color, $this->color))
        {            
            switch ($color) {
                case 'rouge':
                    $this->jetonRouge = 0;
                    break;
                case 'bleu':
                    $this->jetonBleu = 0;
                    break;
                case 'vert':
                    $this->jetonVert = 0;
                    break;
                case 'or':
                    $this->jetonOr = 0;
                    break;
                case 'blanc':
                    $this->jetonBlanc = 0;
                    break;
                case 'noir':
                    $this->jetonNoir = 0;
                    break;    
            }
        }
        else
        {
            return false;
        }
    }
}

?>
<html>
    <head>
        
    </head>

    <body>

    
    </body>
</html>

<button class="favorite styled" type="button">Vert</button>
<button class="favorite styled" type="button">Blanc</button>
<button class="favorite styled" type="button">Bleu</button>
<button class="favorite styled" type="button">Rouge</button>
<button class="favorite styled" type="button">Noir</button>
<button class="favorite styled" type="button">Or</button>