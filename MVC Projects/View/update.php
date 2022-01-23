<?php require_once("header")?>
<h1>Update Details</h1>
    <?php  require_once("/opt/lampp/htdocs/php course/MVC Projects/Model/database.php")?>
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
      <button type="submit" name = "update" value = "1" class="btn btn-primary" style="margin-left:200px;">Update</button><?php require_once("footer.php") ?>
