<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<title>Portal</title>
</head>
<body>

<div class="container-fluid">

	<div class="list-group">
		<a href="<?=site_url('admin/portal/school_year')?>" class="list-group-item">School Year</a>
		<a href="<?=site_url('admin/portal/add_course')?>" class="list-group-item">Add Course</a>
		<a href="<?=site_url('admin/portal/students')?>" class="list-group-item">Register student</a>
		<a href="<?=site_url('admin/portal/professors')?>" class="list-group-item">Register prof</a>
		<a href="<?=site_url('admin/portal/deans_office')?>" class="list-group-item">Register DO</a>
	</div>

</div>	
	
	<div class="container-fluid">
	<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
	<?php endif; ?>
		<?=form_open('admin/portal/do/add')?>
			<legend>Form title</legend>
		
			<div class="form-group">
				<label for="">Username</label>
				<input type="text" name="username" class="form-control" id="" placeholder="Username">
			</div>
			
			<div class="form-group">
				<label for="">Password</label>
				<input type="text" name="password" class="form-control" id="" placeholder="Password">
			</div>

			<div class="form-group">
				<label for="">First Name</label>
				<input type="text" name="first_name" class="form-control" id="" placeholder="First Name">
			</div>

			<div class="form-group">
				<label for="">Last Name</label>
				<input type="text" name="last_name" class="form-control" id="" placeholder="Last Name">
			</div>

			<div class="form-group">
				<label for="">College Department</label>
				<select name="college_dept" id="input" class="form-control" required="required">
					<option>-----Select One-----</option>
					<option value="College of Office Administration and Computer Technology">College of Office Administration and Computer Technology</option>
					<option value="College of Business Administration">College of Business Administration</option>
					<option value="College of Education">College of Education</option>
					<option value="College of Arts and Sciences">College of Arts and Sciences</option>
					<option value="College of Nursing and Midwifery">College of Nursing and Midwifery</option>
				</select>
			</div>

		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>
</html>