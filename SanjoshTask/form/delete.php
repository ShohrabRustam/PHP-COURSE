<?php
ini_set("display_errors","1");
error_reporting(E_ALL);

$servername = "localhost";
$username = 'root';
$password = '';
try {
  $conn = new PDO("mysql:host=$servername;port=3306;dbname=CURL", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$id = $_POST['id'] ?? null;

$query="DELETE FROM curd where id = $id ";
$statement = $conn->prepare($query);
$statement->execute();
header("Location: index.php");
if(!$id){
  header("Location: index.php");
      exit;
}
// }


/*
if(isset($query)){
  ?>
<script>
  location.replace("https://www.w3schools.com");
  </script>
  <?php
}
else{
  ?>
  <script>
  location.replace("https://www.w3schools.com")
  </script>
  <?php
}
*/

?>


