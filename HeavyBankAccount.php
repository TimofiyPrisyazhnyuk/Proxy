<?php

/**
 * Class HeavyBankAccount
 */
class HeavyBankAccount implements BankAccount
{
    /**
     * @var int[]
     */
    private $transactions = [];

    /**
     * @param int $amount
     * @return mixed|void
     */
    public function deposit(int $amount)
    {
        $this->transactions[] = $amount;
    }

    /**
     * @return int
     */
    public function getBalance(): int
    {
        // this is the heavy part, imagine all the transactions even from
        // years and decades ago must be fetched from a database or web service
        // and the balance must be calculated from it

        return array_sum($this->transactions);
    }
}
