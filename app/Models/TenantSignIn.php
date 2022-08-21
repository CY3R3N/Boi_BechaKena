<?php

namespace app\Models;
class TenantSignIn {
    public $email;
    public $password;


    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }    


    public function setPassWord($password) {
        $this->password = $password;
    }
    public function getPassword(){
        return $this->password;
    }    

    

}

?>