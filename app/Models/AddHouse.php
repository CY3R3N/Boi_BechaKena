<?php
namespace app\Models;

class AddHouse{

    
    public $ownerid;
    public $nrooms;
    public $occ;
    public $rate;
    public $city;
    public $addl;


    public function setOwnerId($ownerid) {
        $this->ownerid = $ownerid;
    }
    public function getOwnerId(){
        return $this->ownerid;
    }    

    public function setNroom($nrooms) {
        $this->nrooms = $nrooms;
    }
    public function getNroom(){
        return $this->nrooms;
    }    

    public function setRate($rate) {
        $this->rate = $rate;
    }
    public function getRate(){
        return $this->rate;
    }    

    public function setOccupation($occ) {
        $this->occ = $occ;
    }
    public function getOccupation(){
        return $this->occ;
    }    

    public function setCity($city) {
        $this->city = $city;
    }
    public function getCity(){
        return $this->city;
    }    

    public function setAddress($addl) {
        $this->addl = $addl;
    }
    public function getAddress(){
        return $this->addl;
    }    
   

}

?>