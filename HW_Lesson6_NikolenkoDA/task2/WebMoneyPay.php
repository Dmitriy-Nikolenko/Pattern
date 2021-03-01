<?php


class WebMoneyPay implements IPayment
{

    public function summ(array $socks)
    {
        echo "Оплата по WebMoney" . PHP_EOL;
    }

    public function telephon()
    {
        // TODO: Implement telephon() method.
    }
}