

<h1>My Account</h1>
<p> 

<?php
if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    // session isn't started
    session_start();
}

if (isset($_SESSION['username']))
    echo "Username: " . $_SESSION['username'];


?>
<p>
<?php 
if (isset($_SESSION['userID']))
    echo "User ID: " . $_SESSION['userID'];
?>
</p>


<p>
<?php 
if (isset($_SESSION['ROLENAME']))
    echo "ROLENAME: " . $_SESSION['ROLENAME'];
?>
</p>


<p>
<?php 
if (isset($_SESSION['Description']))
    echo "Description: " . $_SESSION['Description'];
?>
</p>

<p>
<?php 
if (isset($_SESSION['ACCESSLEVEL']))
    echo "ACCESSLEVEL: " . $_SESSION['ACCESSLEVEL'];
?>
</p>

</p>