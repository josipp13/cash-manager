<?php

namespace Balance;

use Exception;
use \Data\DataStructureReaderInterface;

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
}
