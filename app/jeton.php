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
    public $colors = ['rouge', 'bleu', 'vert', 'blanc', 'noir', 'or'];

    public function __construct()
    {
        if(!isset($_SESSION)) {
            session_start();
            echo 'toto';
            foreach($this->colors as $color){
                $_SESSION[$color] = 0;
                echo $_SESSION[$color];
            }
        }   
    }

    public function addJeton(array $colors)
    {

        $montant = 0;
        if (count($this->colors) == 3) {
            $montant = 1;
        }
        elseif (count($this->colors) == 1) {
            $montant = 2;
        }
        else {
            return false;
        }

        $verif = array_count_values($this->colors);

        var_dump($verif);

        foreach ($verif as $key => $value)
        {
            if ($value > 1)
            {
                return false;
            }
        }

        foreach ($this->colors as $color)
        {
            switch ($color) {
                case 'rouge':
                    $_SESSION['rouge'] += $montant;
                    break;
                case 'bleu':
                    $_SESSION['bleu'] += $montant;
                    break;
                case 'vert':
                    $_SESSION['vert'] += $montant;
                    break;
                case 'or':
                    $_SESSION['or'] += $montant;
                    break;
                case 'blanc':
                    $_SESSION['blanc'] += $montant;
                    break;
                case 'noir':
                    $_SESSION['noir'] += $montant;
                    break;
                default:
                    return false;
            }
            $this->total += $montant;
        }
        return true;
    }
}

$gestionJeton = new gestionJeton();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $out = array();
    foreach ($_POST as $key) {
        $out[$key] = $_POST[$key];
    }
    $gestionJeton->addJeton($out);
}
echo "<form action='jeton.php' method='post'>";

    foreach($gestionJeton->colors as $color){
        echo "<label for='$color'>$color</label></br>
        <input id='$color' name='$color' type='checkbox' value='$color'/></br>";
    }

    foreach($gestionJeton->colors as $color){
        echo "<div class='' type='button'>$color = $_SESSION[$color]</div></br>";
    }

echo "

   <button type='submit'>Valider</button>
</form>";


