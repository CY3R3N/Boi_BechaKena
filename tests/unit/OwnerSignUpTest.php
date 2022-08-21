<?php
 
class OwnerSignUpTest extends \PHPUnit\Framework\TestCase {

    protected $owner;
    public function testName(){
        $this->owner = new \App\Models\OwnerSignUp;

        $this->owner->setName("Mr Hasan");

        $this->assertEquals($this->owner->getName(),"Mr Hasan");

    }

    public function testEmail(){
        $this->owner = new \App\Models\OwnerSignUp;

        $this->owner->setEmail("Hasan@gmail.com");

        $this->assertEquals($this->owner->getEmail(),"Hasan@gmail.com");

    }

    public function testPassword(){
        $this->owner = new \App\Models\OwnerSignUp;

        $this->owner->setPassword("password");

        $this->assertEquals($this->owner->getPassword(),"password");

    }

    public function testMobileNo(){
        $this->owner = new \App\Models\OwnerSignUp;

        $this->owner->setMobile("01784936217");

        $this->assertEquals($this->owner->getMobile(),"01784936217");

    }


    public function testOccupation(){
        $this->owner = new \App\Models\OwnerSignUp;

        $this->owner->setOccupation("Teacher");

        $this->assertEquals($this->owner->getOccupation(),"Teacher");

    }

    public function testNoOfHouse(){
        $this->owner = new \App\Models\OwnerSignUp;

        $this->owner->setNoOfHouse(3);

        $this->assertEquals($this->owner->getNoOfHouse(),3);

    }

    public function testCity(){
        $this->owner = new \App\Models\OwnerSignUp;

        $this->owner->setCity("01784936217");

        $this->assertEquals($this->owner->getCity(),"01784936217");

    }

    public function testAddress(){
        $this->owner = new \App\Models\OwnerSignUp;

        $this->owner->setAddress("Mohakhali");

        $this->assertEquals($this->owner->getAddress(),"Mohakhali");

    }

    
}

?>