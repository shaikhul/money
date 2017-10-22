<?php

require_once "Currency.php";

class Money {
    private $currency;
    private $amount;

    public function __construct($amount, Currency $currency) {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function __toString() {
        return "Amount: {$this->amount} {$this->currency}";
    }
}
