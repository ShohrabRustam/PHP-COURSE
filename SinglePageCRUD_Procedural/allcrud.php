<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once("connection.php");
// require_once("delete.php");
$n=$mail=$ph=$addr=$items1="";
$fullName = "Name";
$address = "Address";
$gmailAddress = "Email";
$phoneNumber= "Phone No";

$servername = "localhost";
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$servername;port=3306;dbname=curl", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

    if (isset($_POST['add'])) {
        $fullName = $_POST['fullName'];

        $gmailAddress = $_POST['gmailAddress'];

        $phoneNumber = $_POST['phoneNumber'];

        $address = $_POST['address'];

        $query = "INSERT INTO `curl` (`id`, `fullName`, `gmailAddress`, `phoneNumber`, `address`) VALUES (NULL, '$fullName', '$gmailAddress', '$phoneNumber', '$address');";
        $statements = $conn->prepare($query);
        $statements->execute();
        header("Location: allcrud.php");
        // echo "Sucessfully submit";
    }



if (isset($_POST['delete'])) {
    $id = $_POST['delete'];

    $query = "DELETE FROM curl where `id` = $id ";
    $statement = $conn->prepare($query);
    $statement->execute();
    header("Location: allcrud.php");
}

if (isset($_POST['update'])) {
    
    $id = $_POST['update'];

    $query="SELECT * FROM curl WHERE id='$id'";

    $statement = $conn->query($query);
    // $statement->bindValue(':id', $id);
    // $statement->execute();
    while($item = $statement->fetchAll(PDO::FETCH_ASSOC))
    {
    
    $item=$item[0];
    $n = $item['fullName'];
    $mail = $item['gmailAddress'];
    $ph = $item['phoneNumber'];
    $addr=$item['address'];
    }
    // $query = "SELECT * FROM curl where id = :id ";

    // $query = "UPDATE INTO `curl` set `fullName`=$fullName, `gmailAddress` = $gmailAddress, `phoneNumber`=$phoneNumber, `address`=$address;";
    // $statements = $conn->prepare($query);
    // $statements->execute();
    // header("Location: allcrud.php");
}
if (isset($_POST['updatedata'])) {
    
    $id = $_POST['getid'];

    $fullName1 = $_POST['fullName'];

    $gmailAddress1 = $_POST['gmailAddress'];

    $phoneNumber1 = $_POST['phoneNumber'];

    $address1 = $_POST['address'];
    

    $query1 = "UPDATE `curl` set `fullName`='$fullName1', `gmailAddress` = '$gmailAddress1', `phoneNumber`='$phoneNumber1', `address`='$address1' WHERE id='$id'";
    $statements = $conn->prepare($query1);
    $statements->execute();
    header("Location: allcrud.php");
}
?>






<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>All CRUD in One</title>
</head>

<body>
    <!-- INSER ALL DATA INTO THE FORM -->

    <h3> ........................................... Information to Add , Update , Delete ................................. </h3>
    <hr>
    <br>

    <form method="post">
        <input type="text" value="<?php echo $id; ?>" name="getid" hidden>
        <div class="form-group">
            <label>Name :</label>
            <input type="text" class="form-control" name="fullName" value="<?php echo $n; ?>" required>

        </div>

        <div class="form-group">
            <label>Email :</label>
            <input type="email" class="form-control" name="gmailAddress" value="<?php echo $mail; ?>" required>
        </div>


        <div class="form-group">
            <label>Phone :</label>
            <input type="number" class="form-control" name="phoneNumber" value="<?php echo $ph; ?>" required>

        </div>

        <div class="form-group">
            <label>Address :</label>
            <input type="text" class="form-control" name="address" value="<?php echo $addr; ?>" required>
        </div>
        <button type="submit" name="add" class="btn btn-primary">Add</button>
        <button type="submit" name="updatedata" value="" class="btn btn-primary">Update</button>

    </form>
    <br>
    <hr>


    <p> All records </p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Gmail</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $i => $item) { ?>
                <tr>
                    <td><?php echo $item['id'] ?></td>
                    <td><?php echo $item['fullName']; ?></td>
                    <td><?php echo $item['gmailAddress']; ?></td>
                    <td><?php echo $item['phoneNumber']; ?></td>
                    <td><?php echo $item['address']; ?></td>
                    <form style="display: inline-block;" method="post">
                    <td><button type="submit" name="update" value="<?php echo $item['id'] ?>" class="btn btn-primary">Edit</button>
                    </form>

                        <form style="display: inline-block;" method="post">
                            <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                            <button type="submit" name="delete" value="<?php echo $item['id'] ?>" class="btn btn-danger">Delete</button>
                        </form>
                </tr>
            <?php } ?>

        </tbody>
    </table>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>