<?php 
require_once("connection.php");
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
    <!-- Bootstrap CSS -->

    <title>CURD</title>
  </head>
  <body>
      <p>

          <a href="form.php" class="btn btn-success">ADD NEW DETAILS</a>
      </p>
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
      <?php foreach($items as $i=>$item) { ?>
        <tr>
      <td><?php echo $item['id'] ?></td>
      <td><?php echo $item['fullName']; ?></td>
      <td><?php echo $item['gmailAddress']; ?></td>
      <td><?php echo $item['phoneNumber']; ?></td>
      <td><?php echo $item['address']; ?></td>
      <td>
        <form style="display: inline-block;" method="post" action="update.php">
            <input type="hidden" name="id" value="<?php echo $item['id']?>">
          <button type="submit" name = "edit"  value = "1" class="btn btn-primary">Edit</button>
      </form>
      <form style="display: inline-block;" method="post" action="delete.php">
            <input type="hidden" name="id" value="<?php echo $item['id']?>">
          <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      </td>
    </tr>
          <?php } ?>
    
  </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>