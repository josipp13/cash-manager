<?php

namespace Transaction;

use \Data\DataStructureReaderInterface;

class Transaction
{
    /**
     * @var \Data\DataStructureReaderInterface
     */
    private $transactionData;

    /**
     * Transaction constructor.
     * @param DataStructureReaderInterface $data
     */
    public function __construct(DataStructureReaderInterface $data)
    {
        $this->transactionData = $data;
    }
}
