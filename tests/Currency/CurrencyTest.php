<?php

use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase
{
    /**
     * @dataProvider currencyDataProvider
     */
    public function testName($a, $excpected)
    {
        $currency = new \Currency\Currency(new \Data\DataStructure($a));
        $this->assertEquals($excpected, $currency->name());
    }

    public function currencyDataProvider()
    {
        return [
            'Euro currency' => [['currency_name' => 'Euro'], 'Euro'],
            'US dollar currency' => [['currency_name' => 'Us dollar'], 'Us dollar'],
            'Croatian kuna currency' => [['currency_name' => 'Hrvatska kuna'], 'Hrvatska kuna'],
            'Bosanska marka currency' => [['currency_name' => 'Bosanska marka'], 'Bosanska marka'],
        ];
    }
}
