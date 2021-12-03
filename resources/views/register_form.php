<?php

?>

<form class="form-horizontal" action="process_register">
<legend>Please Register</legend>

<div class="form-group">
	<label class="col-md-4 control-label" for="username">New Username</label>
	<div class="col-md-5">
		<input id = "username" type="text" name="username" placeholder="your username" class="form-control input-md" required="">
	</div>
</div>

<div class="form-group">
	<label class="col-md-4 control-label" for="password">New Password</label>
	<div class="col-md-5">
		<input id = "password" type="password" name="password" placeholder="your password" class="form-control input-md" required="">
	</div>
</div>

<div class="form-group">
	<label for="submit" class="col-md-4 control-label"></label>
	<div class="col-md-4">
		<button id="submit" name="submit" class="btn btn-primary">Register Account</button>
	</div>
</div>
</form>