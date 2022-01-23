<?php
function read(){
    global $db;
    $query="SELECT * FROM curd ORDER BY `id`";
    $statement=$db->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    return $result;
}
function insert($name, $gmail,$address,$phone){
   global $db; 
   $count=0;
     $query = "INSERT INTO curd (`fullName`, `gmailAddress`,`phoneNumber`, `address`) VALUES ('$name','$gmail',$phone, '$address');";
     $statement=$db->prepare($query);
     if($statement->execute()){
     $count=$statement->rowCount();
     }
     else{
     $statement->closeCursor();
     }
     return $count;
}
function delete($id){
    global $db;
    $count=0;
    $query="DELETE FROM curd where id = $id ";
$statement = $db->prepare($query);
if($statement->execute()){
    $count=$statement->rowCount();
}
else{
    $statement->closeCursor();
}
return $count;
}

function update($id,$name,$gmail,$address,$phone){
    global $db;
    $count = 0;
    $query="UPDATE curd set `fullName`='$name', `gmailAddress` = '$gmail', `phoneNumber`=$phone, `address`='$address' where `id`=$id";
    $statement = $db->prepare($query);
     if($statement->execute()){
         $count = $statement->rowCount();
     }
     else{
         $statement->closeCursor();
     }
     return $count;
}
?>