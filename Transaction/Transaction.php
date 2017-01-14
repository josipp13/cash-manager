<?php

namespace Transaction;

use \Data\DataStructureReaderInterface;

class Transaction
{
    /**
     * @var \Data\DataStructureReaderInterface
     */
    private $transactionData;

    public function __construct(DataStructureReaderInterface $data)
    {
        $this->transactionData = $data;
    }
}
