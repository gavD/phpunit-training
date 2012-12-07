<?php
include '../Src/User.php';
include '../Src/Account.php';

class UserTest extends PHPUnit_Framework_TestCase {
    
    public function testCanConstructAUserAndGetAndSetName() {
        $account = $this->getMock('Account');
        $account->addFunds(10);
        
        $user = new User('gavin', $account);
        $this->assertEquals('gavin', $user->getName());
        $user->setName("John");
        $this->assertEquals("John", $user->getName());
    }
    
    public function testCanCheckUserBalance() {
//        $account = $this->getMock('Account');
        
         // Create a stub for the SomeClass class.
        $account = $this->getMockBuilder('Account')
                     ->disableOriginalConstructor()
                     ->getMock();
 
        // Configure the stub.
        $account->expects($this->any())
             ->method('getFunds')
             ->will($this->returnValue(10));
                
        $user = new User('gavin', $account);
        
        $this->assertEquals(10, $user->getBalance());
    }

}