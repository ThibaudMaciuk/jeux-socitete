<?php declare(strict_types=1);

namespace Test\TestMaxJeton;

use gestionJeton;
use PHPUnit\Framework\TestCase;

require __DIR__ . '/../../app/jeton.php';

class testJeton extends TestCase
{
    public $jeton;

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->jeton = new gestionJeton();
    }

    public function test_init_3_Jeton()
    {
        $this->jeton->addJeton(['rouge', 'bleu', 'blanc']);

        $this->assertEquals(1,($this->jeton->jetonRouge && $this->jeton->jetonBleu && $this->jeton->jetonBlanc));
    }

    public function test_init_3_Jeton_false()
    {
        $this->assertFalse($this->jeton->addJeton(['rouge', 'rouge', 'blanc']));
    }

    public function test_ajout_4_couleur_jeton()
    {
        $this->assertFalse($this->jeton->addJeton(['rouge', 'bleu', 'jaune', 'vert']));
    }

    public function test_ajout_2_couleur()
    {
        $this->assertFalse($this->jeton->addJeton(['rouge', 'bleu']));
    }

    public function test_init_2_Jeton()
    {
        $this->jeton->addJeton(['rouge']);

        $this->assertEquals(2, $this->jeton->jetonRouge);

    }
}