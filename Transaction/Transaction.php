<?php

namespace Transaction;

use Balance\Balance;
use Data\DataStructure;
use Data\DataStructureFactory;

class Transaction
{
    /**
     * @var DataStructure
     */
    private $transactionData;

    /**
     * Transaction constructor.
     * @param DataStructure $data
     */
    public function __construct(DataStructure $data)
    {
        $this->transactionData = $data;
    }

    /**
     * Returns the beginning balance
     * @return Balance
     * @throws \Exception
     */
    public function openingBalance() : Balance
    {
        return $this->transactionData->getValue('opening_balance');
    }

    /**
     * @param float $amount
     */
    public function withdraw(float $amount)
    {
        $this->transactionData->setValue('withdraw', $amount);
    }

    /**
     * @param float $amount
     */
    public function deposit(float $amount)
    {
        $this->transactionData->setValue('deposit', $amount);
    }

    /**
     * Adds amount to balance
     * @param float $amount
     */
    public function addToBalance(float $amount)
    {
        $tmp = $this->openingBalance()->currentBalance() + $amount;
        $this->transactionData->setValue(
            'new_balance',
            new Balance(DataStructureFactory::create(['current_state' => $tmp]))
        );
    }

    /**
     * Removes amount from balance
     * @param float $amount
     */
    public function removeFromBalance(float $amount)
    {
        $tmp = $this->openingBalance()->currentBalance() - $amount;
        $this->transactionData->setValue(
            'new_balance',
            new Balance(DataStructureFactory::create(['current_state' => $tmp]))
        );
    }
}
