<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require __DIR__.'/../app/jeton.php';

class testJeton extends TestCase
{

    public function test_init_3_Jeton()
    {
        $jeton = new gestionJeton();

        foreach (['rouge', 'bleu', 'blanc'] as $value)
        {
            $this->assertTrue($jeton->addJeton($value));
        }

        $this->assertEquals(1, $jeton->jetonRouge);
        $this->assertEquals(1, $jeton->jetonBleu);
        $this->assertEquals(1, $jeton->jetonBlanc);

        $this->assertFalse($jeton->addJeton("lckhlsdhfliuds"));
    }

    public function test_init_2_Jeton()
    {
        $jeton = new gestionJeton();
            $this->assertTrue($jeton->addJeton('rouge'));
            $this->assertTrue($jeton->addJeton('rouge'));

        $this->assertEquals(2, $jeton->jetonRouge);

    }

    public function test_add_stock()
    {
        $jeton = new gestionJeton();

        foreach (['rouge', 'bleu', 'blanc'] as $value)
        {
            $this->assertTrue($jeton->addJeton($value));
        }

            $this->assertEquals(3, array_sum([
                $jeton->jetonOr,
                $jeton->jetonVert,
                $jeton->jetonRouge,
                $jeton->jetonNoir,
                $jeton->jetonBlanc,
                $jeton->jetonBleu
            ]));
    }

    public function test_full_stock()
    {
        $jeton = new gestionJeton();
        $this->assertFalse($jeton->addJeton('noir', 11));

        $this->assertTrue($jeton->addJeton('noir', 7));

    }

}