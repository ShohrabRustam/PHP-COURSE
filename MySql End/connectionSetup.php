
<?php
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
$query="SELECT * FROM curl ORDER BY `address`";
$statements=$conn->prepare($query);
$statements->execute();
$products=$statements->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
var_dump($products);
echo '</pre>';
?>
