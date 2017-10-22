<?php

class Currency {
    private $code;

    public function __construct($code) {
        $this->code = $code;
    }

    public function __toString() {
        return $this->code;
    }
}
