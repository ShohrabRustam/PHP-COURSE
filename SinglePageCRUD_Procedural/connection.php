
<?php
ini_set("display_errors","1");
error_reporting(E_ALL);
$servername = "localhost";
$username = 'root';
$password = '';

try {
  $conn = new PDO("mysql:host=$servername;port=3306;dbname=curl", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$query="SELECT * FROM curl ORDER BY `id`";
$statements=$conn->prepare($query);
$statements->execute();
$items=$statements->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// var_dump($items);
// echo '</pre>';
?>
