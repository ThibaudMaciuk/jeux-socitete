<?php declare(strict_types=1);

namespace Test\TestMaxJeton;

use gestionJeton;
use PHPUnit\Framework\TestCase;

require __DIR__ . '/../../app/jeton.php';

class testJeton extends TestCase
{

    public function test_init_3_Jeton()
    {
        $jeton = new gestionJeton();

        $this->assertFalse($jeton->addJeton(['rouge', 'bleu']));
        $this->assertFalse($jeton->addJeton(['rouge', 'bleu', 'test', 'test']));

        $this->assertTrue($jeton->addJeton(['rouge', 'bleu', 'blanc']));

        $this->assertEquals(1,$jeton->jetonRouge);
        $this->assertEquals(1,$jeton->jetonBleu);
        $this->assertEquals(1,$jeton->jetonBlanc);
        $this->assertEquals(3,$jeton->total);
    }

    public function test_duplicata()
    {
        $jeton = new gestionJeton();

        $this->assertFalse($jeton->addJeton(['rouge', 'bleu', 'bleu']));

        $this->assertEquals(0,$jeton->jetonRouge);
        $this->assertEquals(0,$jeton->jetonBleu);
    }

    public function test_init_2_Jeton()
    {
        $jeton = new gestionJeton();
        $this->assertTrue($jeton->addJeton(['rouge']));

        $this->assertEquals(2, $jeton->jetonRouge);

    }
}