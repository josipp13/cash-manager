<?php

namespace Currency;

use Data\DataStructure;

class Currency
{
    /**
     * @var DataStructure
     */
    private $dataStructure;

    /**
     * Currency constructor.
     * @param DataStructure $dataStructure
     */
    public function __construct(DataStructure $dataStructure = null)
    {
        $this->dataStructure = $dataStructure;
    }

    /**
     * Returns the currency name
     * @return string
     */
    public function name() : string
    {
        return $this->dataStructure->getValue('currency_name');

    }


    public function sign():string
    {
        return $this->dataStructure->getValue('currency_sign');


    }

}
