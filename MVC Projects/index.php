<?php 
require_once("Model/database.php");
$id = filter_input(INPUT_POST,"id",FILTER_VALIDATE_INT);
$fullName = filter_input(INPUT_POST,"fullName", FILTER_SANITIZE_STRING);
$phoneNumber = filter_input(INPUT_POST,"phoneNumber",FILTER_SANITIZE_NUMBER_INT);
$Address =filter_input(INPUT_POST,"Address",FILTER_SANITIZE_STRING);
$gmailAddress = filter_input(INPUT_POST,"gmailAddress",FILTER_SANITIZE_STRING);

// $action = filter_input(INPUT_POST,"action",FILTER_SANITIZE_STRING);
// if(!$action){
//   $action = filter_input(INPUT_GET,"action",FILTER_SANITIZE_STRING);
//   if(!$action){
//     $action = 'create_read_form';
//   }
// }
?>
<?php 
if(isset($deleted)){
  echo "Record deleted<br>";
}
  else if (isset($updated)){
      echo "Record Updated <br>";
  }
?>
<!-- <?php 
// if(!$name  && !$newname) { 
  ?>
  <section>
    <h2>Select Data / Read Data</h2>
    <form action="." method="GET">
      <label for="name"> Name:</label>
    </form>
      <input type="text" id="name" name="name" required>
      <button>Submit</button>
  </section>
  <section>
      <h2>Insert Data / Create Data </h2>
      <form action="." method="POST">
        <label for="name"></label>
      </form>
    </section> -->
   