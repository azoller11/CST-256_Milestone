<h1>My Affinity Group</h1>

<?php
?>

<form class="form-horizontal" action="process_newAffinity">
<legend>Please Login</legend>

<div class="form-group">
	<label class="col-md-4 control-label" for="race">Race</label>
	<div class="col-md-5">
		<select id="race" name="race" size="4">
          <option value="White">White</option>
          <option value="Hispanic">Hispanic</option>
          <option value="African American">African American</option>
          <option value="Asian">Asian</option>
        </select>
	</div>
</div>


<div class="form-group">
	<label class="col-md-4 control-label" for="religion">Religion</label>
	<div class="col-md-5">
		<input id = "religion" type="text" name="religion" placeholder="your religion" class="form-control input-md" required="">
	</div>
</div>

<div class="form-group">
	<label class="col-md-4 control-label" for="gender">Gender</label>
	<div class="col-md-5">
		<select id="gender" name="gender" size="2">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
	</div>
</div>

<input type="number" name="age" id="age" min="1" max="100" step="1">

<div class="form-group">
	<label for="submit" class="col-md-4 control-label"></label>
	<div class="col-md-4">
		<button id="submit" name="submit" class="btn btn-primary">Submit</button>
	</div>
</div>
</form>