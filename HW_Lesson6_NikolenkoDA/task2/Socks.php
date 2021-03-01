<?php


class Socks
{
    protected array $socks;

    /**
     * Socks constructor.
     * @param array $socks
     */
    public function __construct(array $socks)
    {
        $this->socks = $socks;
    }

    /**
     * @return array
     */
    public function getSocks(): array
    {
        return $this->socks;
    }


public function payment(IPayment $payment) {

        return $payment->summ($this->socks);

}

}