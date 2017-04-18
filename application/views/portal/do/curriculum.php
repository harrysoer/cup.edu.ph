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
	<br>	
	<a href="<?=site_url('do/subject/add')?>">Add Courses(Subjects)</a>
	<table >

	<thead>
		<?php foreach ($get_year1 as $year1): ?>
			<tr>
				<th colspan="3"><?=$year1['year']?>st Year</th>
			</tr>
			<?php break;?>
		<?php endforeach; ?>	
			<tr>
				<th>Course Code</th>
				<th>Description</th>
				<th>Units</th>
			</tr>
	</thead>
	<tbody>
		<?php foreach ($get_year1 as $year1): $year1_unit=+$year1['no_units']; ?>
			<?php $year1_unit=$year1['no_units'];
				  $year1_unit+=$year1_unit;
			?>
			<tr>
				<td><?=$year1['subj_code']?></td>
				<td><?=$year1['description']?></td>
				<td><?=$year1['no_units']?></td>
			</tr>	
		<?php endforeach; ?>
		<tr>
			<th colspan="2">TOTAL UNITS</th>
			<th><?=$year1_unit?></th>
		</tr>
	</tbody>
	<!-- <thead>
		<?php foreach ($get_year2 as $year2): ?>
			<tr>
				<th colspan="3"><?=$year2['year']?>st Year</th>
			</tr>
			<tr>
				<th>Course Code</th>
				<th>Description</th>
				<th>Units</th>
			</tr>
		<?php endforeach; ?>	
		<?php foreach ($get_year2 as $year2): ?>
			<tr>
				<th><?=$year2['subj_code']?></th>
				<th><?=$year2['description']?></th>
				<th><?=$year2['no_units']?></th>
			</tr>			
		<?php endforeach; ?>
	</thead> -->

	</table>

</body>
</html>