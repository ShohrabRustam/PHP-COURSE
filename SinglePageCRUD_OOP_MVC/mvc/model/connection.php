<?php
    
 
        $servername = "localhost";
        $username = 'root';
        $password = '';

        try {
            $conn = new PDO("mysql:host=$servername;port=3306;dbname=curl", $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        
?>