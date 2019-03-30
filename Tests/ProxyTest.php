<?php

namespace Tests;

use BankAccountProxy;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class ProxyTest
 * @package Proxy\Tests
 */
class ProxyTest
{
    /**
     * Test proxy.
     */
    public function testProxy()
    {
        $bankAccount = new BankAccountProxy();
        $bankAccount->deposit(34);
        echo $bankAccount->getBalance() . "\n";
    }
}

// Run test.
(new ProxyTest())->testProxy();