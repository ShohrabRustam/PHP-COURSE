<?php
    include "../model/connection.php";
    include "../model/index_model.php";
    $obj2 = new Control($conn);
    if (isset($_POST['add'])) {
        $fullName = $_POST['fullName'];
        $gmailAddress = $_POST['gmailAddress'];
        $phoneNumber = $_POST['phoneNumber'];
        $address = $_POST['address'];
        $ops='add';
        $arr = array('fullname'=>$fullName,'gmailAddress'=>$gmailAddress,'phoneNumber'=>$phoneNumber,'address'=>$address);
       
        $obj2->operation($ops,$arr);
        $err = '<div class="text-center" style="color:blue">Added Successfully!</div>';

    }
    if (isset($_POST['updatedata'])) {
        $id = $_POST['getid'];
        if($_POST['getid']==""){

            $err = '<div class="text-center" style="color:red">Data no found! Can\'t Update</div>'; 
        }
        else{
        $fullName = $_POST['fullName'];
        $gmailAddress = $_POST['gmailAddress'];
        $phoneNumber = $_POST['phoneNumber'];
        $address = $_POST['address'];
        $ops='update';
        $arr = array('id'=>$id,'fullname'=>$fullName,'gmailAddress'=>$gmailAddress,'phoneNumber'=>$phoneNumber,'address'=>$address);
        $obj2->operation($ops,$arr);
        $err = '<div class="text-center" style="color:green">Updated Successfully!</div>';
        }

    }
    if(isset($_POST['delete'])){
        $id = $_POST['id'];
        $ops = 'del';
        $obj2->operation($ops,$id);
        
        $err = '<div class="text-center" style="color:red">Deleted!</div>';

    }
    if (isset($_POST['update'])) {
    
        $id = $_POST['update'];
    
        $query="SELECT * FROM curd WHERE id='$id'";
    
        $statement = $conn->query($query);
 
        while($item = $statement->fetchAll(PDO::FETCH_ASSOC))
        {
        
        $item=$item[0];
        $n = $item['fullName'];
        $mail = $item['gmailAddress'];
        $ph = $item['phoneNumber'];
        $addr=$item['address'];
        }

    }

    
    class Control extends Index_Model{
        public function operation($ops,$data){
            switch($ops){
                case 'add':{
                    $this->addRecord($data);
                    break;
               }
               case 'del':{
                $this->delRecord($data);
                break;
           }
                case 'update':{
                    $this->upRecord($data);
                    break;
       }
            }
        }
        public function getAllrecs(){
            $res = $this->getAllrecords();
            return $res;
        }
    }

?>