<?php
include '../Src/Account.php';

class AccountTest extends PHPUnit_Framework_TestCase {
    public function testICanAddFundsToMyAccount() {
        $account = new Account();
        $account->addFunds(10);
        $this->assertEquals(10, $account->getFunds());
    }

    public function testCannotAddNegativeFunds() {
        $account = new Account();

        try{
            $account->addFunds(-1);
        } catch(Exception $e) {
            return;
            // that's ok, that's what we want
        }
        
        $this->fail('Shouldn\'t be able to add -ve funds');
    }
    public function testCanWithdrawFunds() {

        $account = new Account();
             
        $account->withdrawFunds(10);
        $this->assertEquals(-10, $account->getFunds());
        $account->withdrawFunds(10);
        $this->assertEquals(-20, $account->getFunds());

     }
     
     public function testCanDetermineIfAccountOverdrawn() {
         
        $account = new Account();
        $this->assertFalse($account->isOverdrawn());
        $account->addFunds(20);
        $this->assertFalse($account->isOverdrawn());
        $account->withdrawFunds(1);
        $this->assertTrue($account->isOverdrawn());
        
     }
    
}

