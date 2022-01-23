<?php
class Student {
  public $name;
  public $id;

//   function __construct($name,$id) {
//     $this->name = $name;
//     $this->id = $id;
//   }
  function get_details() {
    echo 'the studnet name is : '.$this->name.'<br>';
    echo 'the student id is : '.$this->id.'<br>';
  }
}
// $obj1 = new Student("Rustam",12);
$obj1=new Student();
$obj1->name="Rustam";
$obj1->id = 12;
$obj1->get_details();
$obj2=new Student();
$obj2->name="Shohrab";
$obj2->id = 122;
$obj2->get_details();

?>
 