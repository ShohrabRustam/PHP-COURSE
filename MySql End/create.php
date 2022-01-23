
<?php
require_once('form.php');
ini_set("display_errors","1");
error_reporting(E_ALL);
$pdo = new PDO('mysql:host=localhost;port =3306; dbname=Student_Details', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $statement = $pdo->prepare('SELECT * from students order by id DESC');
// $statement->execute();
// $student = $statement->fetchAll(PDO::FETCH_ASSOC);
// var_dump($student);
// echo '<pre>';
// var_dump($_POST);
//  $_POST["name"];
// echo'</pre>';
// <!-- name=asa&gmail=a%40gmail.com&schoolName=123kjgah&bloodGroup=dfg%2B&phoneNo=23&studentImage=&date=1010-01-01 -->
// $name = $_POST['name'];
// echo $name;
$errors = [];  
if($_SERVER['REQUEST_METHOD']==='POST'){
    // echo $_SERVER['REQUEST_METHOD'];
    $name = $_POST['name'];
    $gmail = $_POST['gmail'];
    $schoolName = $_POST['schoolName'];
    $bloodGroup = $_POST['bloodGroup'];
    $phoneNo= $_POST['phoneNo'];
    $image = $_POST['studentImage'];
    $admissiondate = $_POST['date'];
    
    
    require_once('error.php');
    
    // $insertOperation = "INSERT INTO students (studentName, gmail, schoolName, phoneNo, studentImage, admissionDate, bloodGroup) VALUES ('$name','$gmail','$schoolName',$phoneNo, '$image','$admissiondate','$bloodGroup');";
    // $statement=$pdo->prepare($insertOperation);
    // $statement->execute();

}


?>