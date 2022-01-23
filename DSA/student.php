<?php
class student{
    private $roll_no;
    private $name;
    private $age;

    public function __construct($roll_no=1,$name='Abc',$age=20){
        $this->age=$age;
        $this->roll_no=$roll_no;
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
            
    }
    
    public function getroll_no(){
        return $this->roll_no;
            
    }
    
    public function getage(){
        return $this->roll_no;
    }
    
    public function setter($roll_no=$this->roll_no,$name=$this->name,$age=$this->age){
            $this->name=$name;
            $this->age=$age;
            $this->roll_no=$roll_no;
    }
    
    public function toString(){
            return " $this->roll_no,$this->name,$this->age";
    }

}
$stu1=new student(3,"Rustam",20);
$stu2=new student(1,"Rustam",15);
$stu3=new student(5,"Rustam",10);
$arrayRoll_No=array($stu1->getroll_no()=>array($stu1->getName(),$stu1->getage()),$stu2->getroll_no()=>array($stu2->getName(),$stu2->getage()),$stu3->getroll_no()=>array($stu3->getName(),$stu3->getage()));
$arrayName=array($stu1->getName()=>array($stu1->getroll_no(),$stu1->getage()),$stu2->getName()=>array($stu2->getroll_no(),$stu2->getage()),$stu3->getName()=>array($stu3->getroll_no(),$stu3->getage()));
krsort($arrayRoll_No);
krsort($arrayName);

?>