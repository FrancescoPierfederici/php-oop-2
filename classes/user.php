<?php
class User
{
    protected $name;
    protected $email;
    protected $password;
    protected $age;


    function __construct($name, $email, $password,$age) {
        $this->setName($name);
        $this->setEmail($email);
        $this->setPass($password);
        $this->setAge($age);
       
    }
    public function setName($value) {
        $this->name = $value;
    
        
    }
    public function getName() {
        return $this->name;
    }
    public function setEmail($value) {
        $this->email = $value;
    
        
    }
    public function getEmail() {
        return $this->email;
    }
    public function setPass($value) {
        $this->password = $value;
    
        
    }
    public function getPass() {
        return $this->password;
    }
    public function setAge($value) {
        // controllo se è un numero valido
        // lo converto in un intero
    
        $this->age = $value;
    }
    
    public function getAge() {
        return $this->age;
    }
    
}
