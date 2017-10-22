<?php

require_once __DIR__ . "/vendor/autoload.php";

require_once "AssertionException.php";
require_once "Money.php";

// assertion
function assertEqual($msg, $lval, $rval) {
    if ($lval != $rval) {
        throw new AssertionException("Msg: " + $msg + ", Expected: {$rval}, Got: {$lval}");
    }
    echo ".";
}

// test suite
function testMoneySuccess()
{
    $money = new Money(100, new Currency("USD"));
    assertEqual("Amount should match!", $money, "Amount: 100 USD");

    // this is the breakpoint!, uncomment this and run the test again
    //eval(\Psy\sh());
}

// test runner
testMoneySuccess();

echo PHP_EOL;