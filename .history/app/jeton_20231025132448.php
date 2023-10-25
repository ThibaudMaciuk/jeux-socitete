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

    public function addJeton(array $colors)
    {
        $montant = 0;
        if (count($colors) == 3) {
            $montant = 1;
        }
        elseif (count($colors) == 1) {
            $montant = 2;
        }
        else {
            return false;
        }

        $verif = array_count_values($colors);

        var_dump($verif);

        foreach ($verif as $key => $value)
        {
            if ($value > 1)
            {
                return false;
            }
        }

        foreach ($colors as $color)
        {
            switch ($color) {
                case 'rouge':
                    $this->jetonRouge += $montant;
                    break;
                case 'bleu':
                    $this->jetonBleu += $montant;
                    break;
                case 'vert':
                    $this->jetonVert += $montant;
                    break;
                case 'or':
                    $this->jetonOr += $montant;
                    break;
                case 'blanc':
                    $this->jetonBlanc += $montant;
                    break;
                case 'noir':
                    $this->jetonNoir += $montant;
                    break;
                default:
                    return false;
            }
            $this->total += $montant;
        }
        return true;
    }
}


?>

<?php
$colors = ['rouge', 'bleu', 'vert', 'blanc', 'noir', 'or'];
foreach($colors as $color){
    echo "<button class='' type='button'>$color</button></br>";
}

foreach($colors as $color){
    echo "<div class='' type='button'>$color = </div></br>";
}

