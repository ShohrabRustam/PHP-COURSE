<?php
require_once("form.php");
ini_set("display_errors","1");
error_reporting(E_ALL);
    $pdo = new PDO('mysql:host=localhost;port =3306; dbname=CURL', 'root','' );
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if($_SERVER['REQUEST_METHOD']==='POST'){
    // echo $_SERVER['REQUEST_METHOD'];
$fullName = $_POST['fullName'];
$gmailAddress = $_POST['gmailAddress'];
$phoneNumber= $_POST['phoneNumber'];
$address = $_POST['address'];

$insertOperation = "INSERT INTO curd (`fullName`, `gmailAddress`,`phoneNumber`, `address`) VALUES ('$fullName','$gmailAddress',$phoneNumber, '$address');";
$statement=$pdo->exec($insertOperation);

// $statement->execute();
}
    ?>
 