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

if($_SERVER['REQUEST_METHOD']==='POST'){
$fullName=$_POST['fullName'];

$gmailAddress=$_POST['gmailAddress'];

$phoneNumber = $_POST['phoneNumber'];

$address = $_POST['address'];


$query="INSERT INTO `curd` (`id`, `fullName`, `gmailAddress`, `phoneNumber`, `address`) VALUES (NULL, '$fullName', '$gmailAddress', '$phoneNumber', '$address');";
$statements=$conn->prepare($query);
$statements->execute();
header("Location: index.php");
// echo "Sucessfully submit";
}


// $items=$statements->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// var_dump($products);
// echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
 
    <title>Add</title>
</head>
<body>

   
    <form method="post" >
  <div class="form-group">
      <label>Name :</label>
      <input type="text" class="form-control" name="fullName" required>
  </div>

<div class="form-group">
      <label>Gmail :</label>
      <input type="email" class="form-control" name="gmailAddress" required>
  </div>

 
    <div class="form-group">
        <label>Phone :</label>
        <input type="number" class="form-control" name="phoneNumber" required >
        
    </div>
 
<div class="form-group">
    <label>Address :</label>
    <input type="text" class="form-control" name="address" required >
</div>
  <div class="form-group">
      <input type="checkbox" class="form-check-input" required >
      <label>check</label> <br>
  </div>
      <button type="submit" class="btn btn-primary">Add</button>
</form>
</body>
</html>