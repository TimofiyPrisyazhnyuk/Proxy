<?php

/**
 * Interface BankAccount
 */
interface BankAccount
{
    /**
     * @param int $amount
     * @return mixed
     */
    public function deposit(int $amount);

    /**
     * @return int
     */
    public function getBalance(): int;
}
