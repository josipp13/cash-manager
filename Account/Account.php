<?php

namespace Account;

use Data\DataStructureReaderInterface;
use Person\Person;
use Transaction\Transactions;

class Account
{
    /**
     * @var DataStructureReaderInterface
     */
    private $accountData;

    /**
     * Account constructor.
     * @param DataStructureReaderInterface $dataStructure
     */
    public function __construct(DataStructureReaderInterface $dataStructure)
    {
        $this->accountData = $dataStructure;
    }

    /**
     * @return Transactions
     */
    public function transactions() : Transactions
    {
        return $this->accountData->getValue('transaction_list');
    }

    /**
     * @return Person
     */
    public function person() : Person
    {
        return $this->accountData->getValue('person');
    }
}
