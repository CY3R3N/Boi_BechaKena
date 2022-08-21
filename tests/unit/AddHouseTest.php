<?php
class AddHouseTest extends \PHPUnit\Framework\TestCase {

    protected $addh;
    public function testOwnerId() {
        $this->addh = new \App\Models\AddHouse;

        $this->addh->setOwnerId(2);

        $this->assertEquals($this->addh->getOwnerId(),2);
    }


    public function testNroom() {
        $this->addh = new \App\Models\AddHouse;

        $this->addh->setNroom(3);

        $this->assertEquals($this->addh->getNroom(),3);
    }

    public function testRate() {
        $this->addh = new \App\Models\AddHouse;

        $this->addh->setRate(4);

        $this->assertEquals($this->addh->getRate(),4);
    }

    public function testOccupation() {
        $this->addh = new \App\Models\AddHouse;

        $this->addh->setOccupation("Teacher");

        $this->assertEquals($this->addh->getOccupation(),"Teacher");
    }

    public function testCity() {
        $this->addh = new \App\Models\AddHouse;

        $this->addh->setCity("Mohakhali");

        $this->assertEquals($this->addh->getCity(),"Mohakhali");
    }


    public function testAddress() {
        $this->addh = new \App\Models\AddHouse;

        $this->addh->setAddress("Road no 3, House no 4");

        $this->assertEquals($this->addh->getAddress(),"Road no 3, House no 4");
    }


}


?>