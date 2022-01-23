<?php

    class Index_Model{
           private $con;
           public function __construct($conn){
               $this->con=$conn;
           }
         
        public function getAllrecords(){
            
            $sql="SELECT * FROM curd ORDER BY `id`";
            $res=$this->con->query($sql);
            $item = $res->fetchAll(PDO::FETCH_ASSOC);
            return $item;
        }

        public function addRecord($data){
            $fullName = $data['fullname'];
            $gmailAddress = $data['gmailAddress'];
            $phoneNumber = $data['phoneNumber'];
            $address = $data['address'];
            $query = "INSERT INTO `curd` (`id`, `fullName`, `gmailAddress`, `phoneNumber`, `address`) VALUES (NULL, '$fullName', '$gmailAddress', '$phoneNumber', '$address');";
            $statements = $this->con->prepare($query);
            $statements->execute();
        }
        public function delRecord($data){
            $query = "DELETE FROM curd where `id` = $data";
            $statement = $this->con->prepare($query);
            $statement->execute();
        }
        public function upRecord($data){
            $id = $data['id'];
            $fullName1 = $data['fullname'];
            $gmailAddress1 = $data['gmailAddress'];
            $phoneNumber1 = $data['phoneNumber'];
            $address1 = $data['address'];

            $query1 = "UPDATE `curd` set `fullName`='$fullName1', `gmailAddress` = '$gmailAddress1', `phoneNumber`='$phoneNumber1', `address`='$address1' WHERE id='$id'";
            $statements = $this->con->prepare($query1);
            $statements->execute();
        }


    }
   
    ?>
