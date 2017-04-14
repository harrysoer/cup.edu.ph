<!DOCTYPE html>
<html>
<head>
	<title>Dean's Office</title>
	<style>
		table, th, td {
    		border: 1px solid black;
		}
	</style>
</head>
<body>

	<a href="<?=site_url('do/courses')?>">Courses</a>
	<a href="<?=site_url('do/schedules')?>">Class Schedules</a>
	<a href="<?=site_url('do/professors')?>"> Professors</a>
	<a href="<?=site_url('do/students')?>"> Students</a>
<br>
<h2>Courses List</h2>

<a href="<?=site_url('do/courses/add')?>">ADD Course</a>
	<table >
		<thead>
			<tr>
				<th>Courses</th>
				<th>Abbriviation</th>
				<th>Years</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>

			<?php foreach ($get_courses as $course): ?>
				<tr>
					<th><?=$course['course_name']?></th>
					<th><?=$course['abbrv']?></th>
					<th><?=$course['years']?></th>
					<th><a href="<?=site_url('do/curriculum/').$course['course_id']?>">view curriculum</a></th>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>