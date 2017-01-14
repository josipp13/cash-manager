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

    function __construct($balance=Balance(0))
    {
        $this->balance=$balance;
        $this->transactions=new Transactions();

    }






}