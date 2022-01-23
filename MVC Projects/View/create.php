<?php require_once("header.php")?>
<form method="post" >
    <input type="hidden" name="action" value="insert">
  <div class="form-group">
      <label>Name :</label>
      <input type="text" class="form-control" name="fullName" required>
  </div>
<div class="form-group">
      <label>Gmail :</label>
      <input type="email" class="form-control" name="gmailAddress" required>
  </div>

 
    <div class="form-group">
        <label>Phone :</label>
        <input type="number" class="form-control" name="phoneNumber" required >
        
    </div>
 
<div class="form-group">
    <label>Address :</label>
    <input type="text" class="form-control" name="address" required >
</div>
  <div class="form-group">
      <input type="checkbox" class="form-check-input" required >
      <label>check</label> <br>
  </div>
      <button type="submit" class="btn btn-primary">Add</button>
</form>

<?php require_once("footer.php")?>