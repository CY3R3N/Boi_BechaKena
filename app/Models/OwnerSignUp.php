<?php

  namespace App\Models;

  class OwnerSignUp{

    public   $name;
    public   $email;
    public   $pwd;
    public   $mob;
    public   $occ;
    public   $nhouse;
    public   $city;
    public   $add;


    public function setName($name){
            $this->name = $name;
    }

    public function getName(){
            return $this->name;
    }

    public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

    public function setPassword($pwd)
	{
		$this->pwd = $pwd;
	}

	public function getPassword()
	{
		return $this->pwd;
	}

    public function setMobile($mob)
	{
		$this->mob = $mob;
	}

	public function getMobile()
	{
		return $this->mob;
	}


    public function setOccupation($occ)
	{
		$this->occ = $occ;
	}

	public function getOccupation()
	{
		return $this->occ;
	}


    public function setNoOfHouse($nhouse)
	{
		$this->nhouse = $nhouse;
	}

	public function getNoOfHouse()
	{
		return $this->nhouse;
	}


    public function setCity($city)
	{
		$this->city = $city;
	}

	public function getCity()
	{
		return $this->city;
	}


    public function setAddress($add)
	{
		$this->add = $add;
	}

	public function getAddress()
	{
		return $this->add;
	}










  }


?>