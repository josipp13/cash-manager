<?php

namespace Balance;

use Exception;
use \Data\DataStructureReaderInterface;
use \Currency\Currency;

class Balance
{
    /**
     * @var \Data\DataStructureReaderInterface
     */
    private $balanceData;

    /**
     * Balance constructor.
     * @param DataStructureReaderInterface $dataStructure
     */
    public function __construct(DataStructureReaderInterface $dataStructure)
    {
        $this->balanceData = $dataStructure;
    }

    /**
     * @return float
     * @throws Exception
     */
    public function currentBalance() : float
    {
        return $this->balanceData->getValue('current_state');
    }

    /**
     * @return \Currency\Currency
     */
    public function currency() : Currency
    {
        return $this->balanceData->getValue('currency');
    }
}
