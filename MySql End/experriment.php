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
<?php
$errors = [];  
ini_set("display_errors","1");
error_reporting(E_ALL);
$pdo = new PDO('mysql:host=localhost;port =3306; dbname=Student_Details', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $statement = $pdo->prepare('SELECT * from students order by id DESC');
// $statement->execute();
// $student = $statement->fetchAll(PDO::FETCH_ASSOC);
// var_dump($student);
// echo '<pre>';
// var_dump($_POST);
//  $_POST["name"];
// echo'</pre>';
// <!-- name=asa&gmail=a%40gmail.com&schoolName=123kjgah&bloodGroup=dfg%2B&phoneNo=23&studentImage=&date=1010-01-01 -->
// $name = $_POST['name'];
// echo $name;
    $name = '';
    $gmail = '';
    $schoolName ='';
    $bloodGroup = '';
    $phoneNo= '';
    $image = '';
    $admissiondate = '';
if($_SERVER['REQUEST_METHOD']==='POST')
{
    // echo $_SERVER['REQUEST_METHOD'];
    $name = $_POST['name'];
    $gmail = $_POST['gmail'];
    $schoolName = $_POST['schoolName'];
    $bloodGroup = $_POST['bloodGroup'];
    $phoneNo= $_POST['phoneNo'];
    $image = $_POST['studentImage'];
    $admissiondate = $_POST['date'];
    
    if(!$name)
    {
    $errors[] =  "The name is required <br>";
    }
    if(!$gmail)
    {
        $errors[]= "The gmail is required <br>";
        }
        if(!$schoolName){
            $errors[] =  "The school name is required <br>";
            }
            if(!$bloodGroup){
                $errors[] =  "The Blood Group is required <br>";
                }
                if(!$phoneNo){
                    $errors [] =  "The phone number  is required <br>";
                    }
                    if(!$image){
                        $errors[] =  "The image  is required <br>";
                        }
                        if(!$admissiondate){
                         $errors[] =  "The admission date is required <br>";
                            }
    if(empty($errors)){
    $insertOperation = "INSERT INTO students (studentName, gmail, schoolName, phoneNo, studentImage, admissionDate, bloodGroup) VALUES ('$name','$gmail','$schoolName',$phoneNo, '$image','$admissiondate','$bloodGroup');";
    $statement=$pdo->prepare($insertOperation);
    $statement->execute();
    }

    // require_once("error.php");
}
?>
</head>

<body>
    <h1><?php echo "Create New Student" ?></h1>
    

    <!-- for using get method -->
    <!-- name=&gmail=&schoolName=&bloodGroup=&phoneNo=&studentImage=&date= -->
    <!-- after provide value we grt url like that  -->
    <form action = "experriment.php" method="post">
        <?php
        require_once("errorDetect.php");  
        ?> 
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $name ?>" >
        </div>

           <!-- name=asa&gmail=a%40gmail.com&schoolName=123kjgah&bloodGroup=dfg%2B&phoneNo=23&studentImage=&date=1010-01-01 -->
 <div class="form-group">
            <label>Gmail</label>
            <input type="email" class="form-control" name="gmail"  value="<?php echo $gmail ?>">
        </div>

        <div class="form-group">
            <label>School Name</label>
            <input type="text" class="form-control" name="schoolName"  value="<?php echo $schoolName ?>">
        </div>

        <div class="form-group">
            <label>Blood Group</label>
                <input type="text" class="form-control" name="bloodGroup"  value="<?php echo $bloodGroup ?>">
        </div>

        <div class="form-group">
            <label>Phone no</label>
            <input type="number" class="form-control" name="phoneNo"  value="<?php echo $phoneNo ?>">

        </div>
        <div class="form-group">

            <label>Student Image</label>
            <input type="file" class="form-control" name="studentImage"  value="<?php echo $Image ?>">
        </div>
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        <!-- <label>Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                     -->
        <div class="form-group"> 
            <label>Date</label>
            <input type="date" class="form-control" name="date"  value="<?php echo $admissiondate ?>">
        </div>

        <div class="form-group">
            <input type="checkbox" class="form-check-input" required >
            <label>Check me out</label> <br>
        </div>

        
            <button type="submit" class="btn btn-primary">Submit</button>
    
    

    </form>


</body>

</html>
