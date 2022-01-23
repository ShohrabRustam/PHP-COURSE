<?php
$pdo = new PDO('mysql:host=localhost;port =3333; dbname=Student_Details', 'root','' );
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare('SELECT * from students order by id DESC');
$statement->execute();
$student = $statement->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
var_dump($student);
echo'</pre>';
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

        <h2>How to fatch data from mysql using php</h2>
        <p>
$pdo = new PDO('mysql:host=localhost;port =3306; dbname=Student_Details', 'root','' );<br>
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); <br>
$statement = $pdo->prepare('SELECT * from students order by id DESC');<br>
$statement->execute();<br>
$student = $statement->fetchAll(PDO::FETCH_ASSOC);<br>
var_dump($student);<br>
</p>
      <h1>Product CURL</h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">School_Name</th>
      <th scope="col">phone no</th>
      <th scope="col">Blood_Group</th>
      <th scope="col">Image</th>
      <th scope="col">Date</th>




    </tr>
  </thead>
  <tbody>
      <?php foreach($student as $item){ ?>
    <tr>
        <td>Shohrab</td>
      <td>abc@gmail.com</td>
      <td>Silver Bells Public School</td>
      <td>72175212</td>
      <td>B+</td>
      <td>www.gyhfa.com</td> 
      <td>24-07-1999</td>
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