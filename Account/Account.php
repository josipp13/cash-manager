<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 14.01.17.
 * Time: 18:28
 */

namespace Account;


use Data\DataStructure;

class Account
{
    private $balance;
    private $transactions;

    public function __construct(\Balance\Balance $balance = null)
    {
        $this->balance=$balance;
        $this->transactions=new Transactions();

    }






}