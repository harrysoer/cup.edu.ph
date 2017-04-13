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
	<br>	
	<button>	add</button>
	<br>	
	<button>Edit Curriculum</button>
	<table >
		<thead>
			<tr>
				<th colspan="3">1st Year</th>
			</tr>
			<tr>
				<th>Course Code</th>
				<th>Description</th>
				<th>Units</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>CS101</td>
				<td>Introduction to computing</td>
				<td>3</td>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th colspan="3">2nd Year</th>
			</tr>
			<tr>
				<th>Course Code</th>
				<th>Description</th>
				<th>Units</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>CS102</td>
				<td>Introduction to Programming in C#</td>
				<td>3</td>
			</tr>
		</tbody>
	</table>

</body>
</html>