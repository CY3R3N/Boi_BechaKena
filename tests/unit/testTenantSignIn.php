<?php
    class testTenantSignIn extends \PHPUnit\Framework\TestCase {

        protected $tenant;
        


        public function testCheckIfHasKey():void {
            $tenantArray = [
                'email'=> "tenant@gmail.com",
                'password'=> "password",
            ] ;          
            $this->assertArrayHasKey("email",$tenantArray);
            $this->assertArrayHasKey("password",$tenantArray);


        }

        
        public function testCorrectEmail(){
            $this->tenant = new \App\Models\TenantSignIn;
            $this->tenant->setEmail('tenant@gmail.com');

            $this->assertEquals($this->tenant->getEmail(), 'tenant@gmail.com');

        }

        public function testCorrectPassword(){
            $this->tenant = new \App\Models\TenantSignIn;
            $this->tenant->setPassword('password');

            $this->assertEquals($this->tenant->getPassword(), 'password');

        }



    }    



?>