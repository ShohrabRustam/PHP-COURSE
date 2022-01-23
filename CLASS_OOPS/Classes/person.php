<?php
class Person {
    public $name;
    public $surname;
    private $age;
    public function __construct($name,$surname){
        $this->name = $name;
        $this->surname=$surname;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getAge($age){
        return $this->age;
    }
     
} 
// $obj =new  Person("Shohrab", "Rustam");
?>