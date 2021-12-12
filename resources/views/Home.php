<?php
if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    // session isn't started
    session_start();
}

if (isset($_SESSION['username']))
    echo "Hello " . $_SESSION['username'];

?>

<h1>Application Home</h1>



<form class="form-horizontal" action="login_form">
<div class="form-group">
	<label for="submit" class="col-md-4 control-label"></label>
	<div class="col-md-4">
		<button id="submit" name="Login" class="btn btn-primary">Login</button>
	</div>
</div>
</form>

<form class="form-horizontal" action="register_form">
<div class="form-group">
	<label for="submit" class="col-md-4 control-label"></label>
	<div class="col-md-4">
		<button id="submit" name="Register" class="btn btn-primary">Register</button>
	</div>
</div>
</form>

<form class="form-horizontal" action="myAccount">
<div class="form-group">
	<label for="submit" class="col-md-4 control-label"></label>
	<div class="col-md-4">
		<button id="submit" name="myAccount" class="btn btn-primary">My Account</button>
	</div>
</div>
</form>
