<?php
namespace App\Http\Controllers;


session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);


class userServices {
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
    
    function loginUser($username, $password) {
        $sql = "SELECT * FROM User";
        $result = $this->getConn()->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                //echo "ID = " . $row["ID"] . " Username: " . $row["Username"] . " Password: " . $row["Password"] . " <br>";
                
                if ($row["Username"] == $username && $row["Password"] == $password) {
                    $_SESSION['username'] = $username;
                    $_SESSION['userID'] = $row["ID"];
                    return true;
                }
                
            }
            $_SESSION = [];
            session_destroy();
            return false;
        }
    }
    
    
    function registerUser($username, $password) {
        $sql = "INSERT INTO User (ID, Username, Password) VALUES ('NULL', '".$username."', '".$password."')";
        if ($this->getConn()->query($sql) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error inserting record: " . $this->getConn()->error;
        }
        
        $this->getConn()->close();
    }
    
    function deleteUser($username, $password) {
        $sql = "DELETE * FROM user WHERE Username = '"+$username+"' AND Password = '"+$password+"'";
        if ($this->getConn()->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . getConn()->error;
        }
        
        $this->getConn()->close();
    }
    
    function updateUser($username, $password) {
        $sql = "UPDATE user SET Username = '"+$username+"' AND SET Password = '"+$password+"' WHERE Username = '"+$username+"' AND WHERE Password = '"+$password+"'";
        if ($this->getConn()->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updated record: " . getConn()->error;
        }
        $this->getConn()->close();
    }
    
    
}