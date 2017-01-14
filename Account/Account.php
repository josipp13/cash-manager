<?php
namespace Account;
use Balance\Balance;
use Transaction\Transactions;
class Account
{
    /**
     * @var Balance|null
     */
    private $balance;
    /**
     * @var Transactions
     */
    private $transactions;
    /**
     * Account constructor.
     * @param Balance|null $balance
     */
    public function __construct(Balance $balance = null)
    {
        $this->balance = $balance;
        $this->transactions = new Transactions();
    }
}
