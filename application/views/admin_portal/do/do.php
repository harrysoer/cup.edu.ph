<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
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

		<a type="button" href="<?=site_url('admin/portal/do/add')?>" class="btn btn-info">Add <span class="glyphicon glyphicon-plus" ></span></a>

		<table class="table table-bordered 	">
			<thead>
				<tr>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Department</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php if ($get_do != null	): ?>
				
			<?php foreach ($get_do as $do): ?>
				<tr>
					<td><?=$do['last_name']?></td>
					<td><?=$do['first_name']?></td>
					<td><?=$do['college_dept']?></td>
					
					<td>
						<a type="button"  class="btn btn-info">Edit <span class="glyphicon glyphicon-pencil" ></span></a>
						<a type="button" onclick="confirm('delete this user?')" href="<?=site_url('admin/portal/do/delete/').$do['username']?>" class="btn btn-danger">Delete <span class="glyphicon glyphicon-trash" ></span></a>
					</td>
				</tr>
			<?php endforeach ?>
			<?php else: ?>
				NO DATA
			<?php endif ?>

			</tbody>
		</table>

	</div>		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	</body>
</html>