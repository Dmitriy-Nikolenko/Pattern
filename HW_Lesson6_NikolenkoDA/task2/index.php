<?php
require 'IPayment.php';
require 'QiwiPay.php';
require 'Shop.php';
require 'Socks.php';
require 'WebMoneyPay.php';
require 'YandexPay.php';

array_push($socks, new Shop());
array_push($socks, new Shop());

function payStrategy(array $socks) {
    $socksPay = new Socks($socks);
    $socksPay->payment(new QiwiPay());
    $socksPay->payment(new YandexPay());
    $socksPay->payment(new WebMoneyPay());
}

payStrategy($socks);