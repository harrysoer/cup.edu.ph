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

	<?=form_open('admin/portal/school_year/add','class="form-inline"')?>
		<legend>Add School year</legend>
	
		<div class="form-group">
			<label for="from">20</label>
			<input type="text" name="from" class="form-control" id="from" placeholder="00" required>
		</div>
		<b>-</b>
		<div class="form-group">
			<label for="sem">20</label>
			<input type="text" name="to" class="form-control" id="tp" placeholder="00" required>
		</div>
		<hr>	
		<div class="form-group">
			<label for="sem">semester</label>
			<select name="sem" id="input" class="form-control" required>
				<option value="1st">1st</option>
				<option value="2nd">2nd</option>
				<option value="3rd">3rd</option>
			</select>
		</div>

		<button type="submit" class="btn btn-primary">Add<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
	</form>
</div>

</body>
</html>