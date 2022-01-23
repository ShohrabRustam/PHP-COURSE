<?php

    require_once('../../model/connection.php');
    require_once('../../model/index_model.php');
    require_once('../../controller/index_controller.php');

    $obj1 = new Control($conn);
    $item = $obj1->getAllrecs();

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
   <div class="container">
    <h3> ........................................... Information to Add , Update , Delete ................................. </h3>
    <hr>
    <br>
     <?= $err; ?>
    <form method="post" name="add1">
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
</div>
<div class="container">

    <div class="text-center"><h3> All records </h3></div>
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
            <?php foreach ($item as $i => $it) { ?>
                <tr>
                    <td><?php echo $it['id'] ?></td>
                    <td><?php echo $it['fullName']; ?></td>
                    <td><?php echo $it['gmailAddress']; ?></td>
                    <td><?php echo $it['phoneNumber']; ?></td>
                    <td><?php echo $it['address']; ?></td>
                    <form style="display: inline-block;" method="post">
                    <td><button type="submit" name="update" value="<?php echo $it['id'] ?>" class="btn btn-primary">Edit</button>
                    </form>

                        <form style="display: inline-block;" method="post">
                            <input type="hidden" name="id" value="<?php echo $it['id'] ?>">
                            <button type="submit" name="delete" value="<?php echo $it['id'] ?>" class="btn btn-danger">Delete</button>
                        </form>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>