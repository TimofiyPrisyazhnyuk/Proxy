<?php

namespace Proxy\Tests;

use Proxy\BankAccountProxy;

require __DIR__ . '/../BankAccount.php';
require __DIR__ . '/../HeavyBankAccount.php';
require __DIR__ . '/../BankAccountProxy.php';

class ProxyTest
{
    public function testProxy()
    {
        $bankAccount = new BankAccountProxy();
        $bankAccount->deposit(34);
        echo $bankAccount->getBalance() . "\n";
    }
}

(new ProxyTest())->testProxy();