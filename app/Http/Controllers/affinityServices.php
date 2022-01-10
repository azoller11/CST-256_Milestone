<?php
namespace App\Http\Controllers;



class affinityServices {
    public $servername = "localhost";
    public $username = "root";
    public $password = "root";
    public $database_in_use = "cst-236";
    
    function getConn() {
        $conn = new \MySQLi($this->servername, $this->username, $this->password, $this->database_in_use);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            return $conn;
        }
    }
    
    
    function addAffinity($userID, $race, $religion, $gender, $age) {
        echo " ".$race;
        echo " ".$religion;
        echo " ".$gender;
        echo " ".$age;
        echo " ".$userID;
        $sql = "INSERT INTO `affinity` (`ID`, `UserID`, `Race`, `Religion`, `Gender`, `Age`) VALUES (NULL, '".$userID."', '".$race."', '".$religion."', '".$gender."', '".$age."');";
        if ($this->getConn()->query($sql) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error inserting record: " . $this->getConn()->error;
        }
        
        $this->getConn()->close();
        
    }
    
    
}