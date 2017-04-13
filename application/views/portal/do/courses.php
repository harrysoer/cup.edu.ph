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

	<table >
		<thead>
			<tr>
				<th>Courses</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Bachelor's Science of Information Technology </td>
				<td><a href="<?=site_url('do/view_curriculum/id/1')?>">View Curricullum</a></td>
			</tr>
		</tbody>
	</table>
</body>
</html>