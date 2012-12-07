<?php
class User {
    private $name = "";
    private $account = null;
    
    public function __construct($name, Account $account) {
        $this->name = $name;
        $this->account = $account;
    }
    
    public function getAccount() {
        return $this->account;
    }
    public function setAccount(Account $account) {
        $this->account = $account;
    }
    
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getBalance() {
        return $this->account->getFunds();
    }
    
//    public function getAccountNumber() {
//        return $this->account->getAccountnumber();
//    }
    
}