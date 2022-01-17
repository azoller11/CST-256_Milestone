<?php
namespace App\Http\Controllers;

class jobServices {
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
    
    
    function getAllInformation() {
        $sql = "SELECT * FROM `job`";
        $result = $this->getConn()->query($sql);
        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                echo "<h2> -  " . $row["Title"]."   </h2>";
                echo "<h3>      " . $row["Description"]."   </h3>";
                echo "<h3>      " . $row["DatePosted"]."   </h3><br>";
            }
        }
        $this->getConn()->close();
    }
    
}