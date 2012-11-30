<?php

class Account {
    private $funds = 0;
    
    public function addFunds($amount) {
        if ($amount < 0) {
            throw new Exception("Amount is < 0");
        }

        $this->funds += $amount;
    } 

    public function getFunds() {
        return $this->funds;
    }

    public function withdrawFunds($amount) {
        $this->funds -= $amount;
    }
    
    public function isOverdrawn() {
        return ($this->funds < 0);
    }
}
