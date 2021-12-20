

<h1>My Account</h1>
<p> 

<?php

use App\Http\Controllers\userServices;

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
<p>

<h1>Account posts and information</h1>

<?php 
    $dao = new userServices();
    
    $dao->getAllInformation(2);
    

?>
</p>

<p>
<h1>New Post</h1>
<form class="form-horizontal" action="process_post"> 

<div class="form-group">
	<label class="col-md-4 control-label" for="information">Information:</label>
	<div class="col-md-5">
		<input id = "information" type="text" name="information" placeholder="your information" class="form-control input-md" required="">
	</div>
</div>
<div class="form-group">
	<label for="submit" class="col-md-4 control-label"></label>
	<div class="col-md-4">
		<button id="submit" name="submit" class="btn btn-primary">Submit Post</button>
	</div>
</div>
</form>









</p>