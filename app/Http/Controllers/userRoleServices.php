<?php

namespace App\Http\Controllers;

error_reporting(E_ALL);
ini_set('display_errors', 1);

class userRoleServices {
    public $servername = "localhost";
    public $username = "root";
    public $password = "root";
    public $database_in_use = "cst-236";
    
    // Create connection
    
    function getConn() {
        $conn = new \MySQLi($this->servername, $this->username, $this->password, $this->database_in_use);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            return $conn;
        }
    }
    
    public function checkRoleExhists($userID) {
        $sql = "SELECT * FROM roles WHERE users_ID = '".$userID."'";
        $result = $this->getConn()->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $_SESSION['ROLENAME'] = $row["ROLENAME"];
                $_SESSION['Description'] = $row["Description"];
                $_SESSION['ACCESSLEVEL'] = $row["ACCESSLEVEL"];
            }
            $this->getConn()->close();
            return true;
        }
        $this->getConn()->close();
        return false;
        
    }
    
    public function addUserToRoles($userID) {
        $sql = "INSERT INTO Roles (ID, ROLENAME, Description, ACCESSLEVEL, users_id) VALUES ('NULL', 'Standard_User', 'Standard user', 1, ".$userID.")";
        if ($this->getConn()->query($sql) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error inserting record: " . $this->getConn()->error;
        }
        
        $this->getConn()->close();
    }
    
    
}