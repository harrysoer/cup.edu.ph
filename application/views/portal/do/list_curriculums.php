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

<a href="<?=site_url('do/courses/add')?>">ADD Curriculum</a>
	<table >
		<thead>
			<tr>
				<th>Curriculum Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>

			<?php foreach ($get_curriculum as $curriculum): ?>
				<tr>
					<th><?=$curriculum['curriculum_name']?></th>
					<th><a href="<?=site_url('do/curriculum/').$this->uri->segment(3).'/'.$curriculum['curriculum_id']?>">view curriculum</a></th>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>