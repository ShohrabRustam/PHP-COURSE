<?php
ini_set("display_errors","1");
error_reporting(E_ALL);
$dataSourceName = 'mysql:host=localhost;dbname=CURL';
$username= 'root';
// $password = 'password';
$password = '';
try{
    $db = new PDO($dataSourceName,$username,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
$error_message = "Database Error : ";
$error_message.=$e->getMessage();
include('/opt/lampp/htdocs/php course/MVC Projects/View/error.php');
exit();
}
$query="SELECT * FROM curd ORDER BY `ID`";
$statements=$db->prepare($query);
$statements->execute();
$items=$statements->fetchAll(PDO::FETCH_ASSOC);
// // echo '<pre>';
// print_r($items);
// echo '<pre>';

?>