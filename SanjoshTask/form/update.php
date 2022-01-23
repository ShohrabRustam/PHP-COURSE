<?php

  // echo "<pre>";
  // print_r($_POST);
  // echo '</pre>';
  // die;
  $item['fullName']="";
 $item['gmailAddress']="";
 $item['phoneNumber']="";
 $item['address']="";

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

// if($id)
$id = $_POST['id'] ?? null;
// echo $id;
if(isset($_POST['edit'])){
$query="SELECT * FROM curd where id= $id";
$statements=$conn->prepare($query);
$statements->execute();
$item=$statements->fetch(PDO::FETCH_ASSOC);
// echo '<pre>';
// var_dump($item);
// echo '</pre>';
// $id = $_POST['id'];
}
// echo $id;

// if($id){
//     header("Location: index.php");
//     exit;
// }
//  echo $id;



// $fullName=$item['fullName'];

// $gmailAddress=$item['gmailAddress'];

// $phoneNumber = $item['phoneNumber'];

// $address = $item['address'];
// // // var_dump($item);

// second execu
if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['update'])){
$fullName=$_POST['fullName'];

$gmailAddress=$_POST['gmailAddress'];

$phoneNumber = $_POST['phoneNumber'];

$address = $_POST['address'];

$query="UPDATE curd set `fullName`='$fullName', `gmailAddress` = '$gmailAddress', `phoneNumber`=$phoneNumber, `address`='$address' where `id`=$id";
echo $query;
// die;
$statements=$conn->prepare($query);
$statements->execute();
header("Location: index.php");
// echo "Sucessfully submit";

}


// if(!$id){
//     header("Location : index.php");
//     exit;
// }


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


   
   <title>Update</title>
  </head>
  <body>
    <h1>Update Details</h1>
    
    <form method="post" >
      <div class="form-group">
        <label>Name :</label>
        <input type="text" class="form-control" name="fullName" value="<?php echo $item['fullName']?>" required>
      </div>
      
      <div class="form-group">
        <label>Gmail :</label>
        <input type="email" class="form-control" name="gmailAddress" value="<?php echo $item['gmailAddress'] ?>" required>
      </div>
      
      
      <div class="form-group">
        <label>Phone :</label>
        <input type="number" class="form-control" name="phoneNumber" value="<?php echo $item['phoneNumber'] ?>" required >
        
      </div>
      
      <div class="form-group">
        <label>Address :</label>
        <input type="text" class="form-control" name="address" value="<?php echo $item['address']?>" required >
      </div>
      <div class="form-group">
        <input type="checkbox" class="form-check-input" required >
        <label >check</label> <br>
      </div>
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <button type="submit" name = "update" value = "1" class="btn btn-primary" style="margin-left:200px;">Update</button>
    </form>
  </body>
  </html>