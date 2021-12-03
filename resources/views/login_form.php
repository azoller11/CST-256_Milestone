<h1>Login Form </h1>

<?php

?>


<form class="form-horizontal" action="process_login">
<legend>Please Login</legend>

<div class="form-group">
	<label class="col-md-4 control-label" for="username">Username</label>
	<div class="col-md-5">
		<input id = "username" type="text" name="username" placeholder="your username" class="form-control input-md" required="">
	</div>
</div>

<div class="form-group">
	<label class="col-md-4 control-label" for="password">Password</label>
	<div class="col-md-5">
		<input id = "password" type="password" name="password" placeholder="your password" class="form-control input-md" required="">
	</div>
</div>

<div class="form-group">
	<label for="submit" class="col-md-4 control-label"></label>
	<div class="col-md-4">
		<button id="submit" name="submit" class="btn btn-primary">Login</button>
	</div>
</div>
</form>