<?php
require_once "Classes/person.php";
require_once "Classes/Student.php"; 
$p = new Person("Shorab","Rustam");
$s = new Student("Aamir","Khan");
$p->setAge(22);
$s->setAge(23);
// echo '<pre>';
// var_dump($p);
// echo '</pre>';
// $p->name="Rustam";
// $p->surname = "Shohrab";
// $p->age =22;
echo "The person :  ".$p->name," ",$p->surname," ",$p->getAge(21).'<br>';
echo "The student :  ".$s->name," ",$s->surname," ",$s->getAge(22);

?>