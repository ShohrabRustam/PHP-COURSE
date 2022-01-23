<?php
$pdo = new PDO('mysql:host=localhost;port =3333; dbname=Student_Details', 'root','' );
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare('SELECT * from students order by id DESC');
$statement->execute();
$student = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// var_dump($student);
// echo'</pre>';
// 
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
          <title>Product Curl</title>
    </head>
    <body>
      <h1><?php echo "Product CURL" ?></h1>
      <p>
        <a href="create.php" class="btn btn-success">Create New Student</a>
      </p>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Gmail</th>
      <th scope="col">School_Name</th>
      <th scope="col">phone no</th>
      <th scope="col">Blood_Group</th>
      <th scope="col">Image</th>
      <th scope="col">Date</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($student as $item){ ?>
    <tr>
        <td><?php echo $item['id']?></td>
      <td><?php echo $item['Name']?></td>
      <td><?php echo $item['Gmail']?></td>
      <td><?php echo $item['School_Name']?></td>
      <td><?php echo $item['phone no'];?></td>
       <td><?php echo $item['Blood_Group'];?></td>
      <td><?php echo $item['Image'];?></td>
      <td><?php echo $item['Date'];?></td>

      <td> 
          <button type="button" class="  btn btn-sm btn-primary">Edit</button>
          <button type="button" class="  btn btn-sm btn-danger">Delete</button>
        </td>

    </tr>
    
    <!-- <tr>
      <td>Rustam</td>
      <td>abcd@gmail.com</td>
      <td>Silver Bells School</td>
      <td>72175213</td>
      <td>B+</td>
      <td>www.fghj.com</td>
      <td>02-10-1999</td>
    </tr>
     -->
      <?php
      }    
      ?>
     </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>