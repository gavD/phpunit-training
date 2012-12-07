<?php
include '../Src/User.php';
include '../Src/Account.php';

class UserTest extends PHPUnit_Framework_TestCase {
    
    public function testCanConstructAUserAndGetAndSetName() {
        $account = new Account();
        $account->addFunds(10);
        
        $user = new User('gavin', $account);
        $this->assertEquals('gavin', $user->getName());
        $user->setName("John");
        $this->assertEquals("John", $user->getName());
    }
    
    
    public function testCanCheckUserBalance() {
        $account = new Account();
        $account->addFunds(10);
        
        $user = new User('gavin', $account);
        
        $this->assertEquals(10, $user->getBalance());
    }

}