<?php

namespace Currency;

use Data\DataStructureReaderInterface;

class Currency
{
    /**
     * @var DataStructureReaderInterface
     */
    private $dataStructure;

    /**
     * Currency constructor.
     * @param DataStructureReaderInterface $dataStructure
     */
    public function __construct(DataStructureReaderInterface $dataStructure = null)
    {
        $this->dataStructure = $dataStructure;
    }

    /**
     * @param DataStructureReaderInterface $dataStructure
     */
    public function setDataStructure(DataStructureReaderInterface $dataStructure)
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
}
