<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title> Create New Student</title>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <h1><?php echo "Create New Student" ?></h1>
    

    <!-- for using get method -->
    <!-- name=&gmail=&schoolName=&bloodGroup=&phoneNo=&studentImage=&date= -->
    <!-- after provide value we grt url like that  -->
    <form action = "create.php" method="post">
        <div class="alert alerrt-danger" >
            <?php
            foreach($errors as $error):?>
            <div><?php echo $error ?></div>
            <?php endforeach;?>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" >
        </div>

           <!-- name=asa&gmail=a%40gmail.com&schoolName=123kjgah&bloodGroup=dfg%2B&phoneNo=23&studentImage=&date=1010-01-01 -->
 <div class="form-group">
            <label>Gmail</label>
            <input type="email" class="form-control" name="gmail">
        </div>

        <div class="form-group">
            <label>School Name</label>
            <input type="text" class="form-control" name="schoolName" >
        </div>

        <div class="form-group">
            <label>Blood Group</label>
                <input type="text" class="form-control" name="bloodGroup">
        </div>

        <div class="form-group">
            <label>Phone no</label>
            <input type="number" class="form-control" name="phoneNo" >

        </div>
        <div class="form-group">

            <label>Student Image</label>
            <input type="file" class="form-control" name="studentImage">
        </div>
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        <!-- <label>Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                     -->
        <div class="form-group"> 
            <label>Date</label>
            <input type="date" class="form-control" name="date" >
        </div>

        <div class="form-group">
            <input type="checkbox" class="form-check-input" required >
            <label>Check me out</label> <br>
        </div>

        
            <button type="submit" class="btn btn-primary">Submit</button>
    
    

    </form>


</body>

</html>
