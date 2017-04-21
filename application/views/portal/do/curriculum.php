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
	<a href="<?=site_url('do/subjects/add/').$this->uri->segment(3).'/'.$this->uri->segment(4)?>">Add Courses(Subjects)</a>
	<table >

<!-- 1st year 1st sem -->
	<thead>
		<?php foreach ($get_year1_1 as $year1_1): ?>
			<tr>
				<th colspan="3"><?=$year1_1['year']?>st Year</th>
			</tr>
			<tr>
				<th colspan="3"><?=$year1_1['sem']?>st Sem</th>
			</tr>
			<?php  $year1_1_total = 0; break;?>
		<?php endforeach; ?>	
			<tr>
				<th>Course Code</th>
				<th>Description</th>
				<th>Units</th>
			</tr>
	</thead>
	<tbody>
		<?php foreach ($get_year1_1 as $year1_1): $year1_1_unit=+$year1_1['no_units']; ?>
			<?php 	
				  $year1_1_unit = $year1_1['no_units'];
				  $year1_1_total += $year1_1_unit ;		
			?>
			<tr>
				<td><?=$year1_1['subj_code']?></td>
				<td><?=$year1_1['description']?></td>
				<td><?=$year1_1_unit?></td>
			</tr>	
		<?php endforeach; ?>
		<tr>
			<th colspan="2">TOTAL UNITS</th>
			<th><?=$year1_1_total?></th>
		</tr>
	</tbody>
	
<!-- 2nd sem -->
	<thead>
		<?php foreach ($get_year1_2 as $year1_2): ?>
			<tr>
				<th colspan="3"><?=$year1_2['year']?>st Year</th>
			</tr>
			<tr>
				<th colspan="3"><?=$year1_2['sem']?>nd Sem</th>
			</tr>
			<tr>
				<th>Course Code</th>
				<th>Description</th>
				<th>Units</th>
			</tr>
			<?php  $year1_2_total = 0; break;?>
		<?php endforeach; ?>	
	</thead>
	<tbody>
		<?php foreach ($get_year1_2 as $year1_2): $year1_2_unit=+$year1_2['no_units']; ?>
			<?php 	
				  $year1_2_unit = $year1_2['no_units'];
				  $year1_2_total += $year1_2_unit ;		
			?>
			<tr>
				<td><?=$year1_2['subj_code']?></td>
				<td><?=$year1_2['description']?></td>
				<td><?=$year1_2_unit?></td>
			</tr>	
		<?php endforeach; ?>
		<?php foreach ($get_year1_2 as $year1_2): ?>
			<tr>
				<th colspan="2">TOTAL UNITS</th>
				<th><?=$year1_2_total?></th>
			</tr>
		<?php break; ?>
		<?php endforeach; ?>
	</tbody>


<!-- 2nd year 1st sem -->
	<thead>
		<?php foreach ($get_year2_1 as $year2_1): ?>
			<tr>
				<th colspan="3"><?=$year2_1['year']?>nd Year</th>
			</tr>
			<tr>
				<th colspan="3"><?=$year2_1['sem']?>st Sem</th>
			</tr>
			<?php  $year2_1_total = 0; break;?>
		<?php endforeach; ?>	
		<?php foreach ($get_year2_1 as $year2_1): ?>
			<tr>
				<th>Course Code</th>
				<th>Description</th>
				<th>Units</th>
			</tr>
		<?php break; ?>
		<?php endforeach; ?>
	</thead>
	<tbody>
		<?php foreach ($get_year2_1 as $year2_1): $year2_1_unit=+$year2_1['no_units']; ?>
			<?php 	
				  $year2_1_unit = $year2_1['no_units'];
				  $year2_1_total += $year2_1_unit ;		
			?>
			<tr>
				<td><?=$year2_1['subj_code']?></td>
				<td><?=$year2_1['description']?></td>
				<td><?=$year2_1_unit?></td>
			</tr>	
		<?php endforeach; ?>
	<?php foreach ($get_year2_1 as $year2_1): ?>
		<tr>
			<th colspan="2">TOTAL UNITS</th>
			<th><?=$year2_1_total?></th>
		</tr>
	<?php break; ?>
	<?php endforeach; ?>


	</tbody>
	
<!-- 2nd sem -->
	<thead>
		<?php foreach ($get_year2_2 as $year2_2): ?>
			<tr>
				<th colspan="3"><?=$year2_2['year']?>nd Year</th>
			</tr>
			<tr>
				<th colspan="3"><?=$year2_2['sem']?>nd Sem</th>
			</tr>
			<tr>
				<th>Course Code</th>
				<th>Description</th>
				<th>Units</th>
			</tr>
			<?php  $year2_2_total = 0; break;?>
		<?php endforeach; ?>	
	</thead>
	<tbody>
		<?php foreach ($get_year2_2 as $year2_2): $year2_2_unit=+$year2_2['no_units']; ?>
			<?php 	
				  $year2_2_unit = $year2_2['no_units'];
				  $year2_2_total += $year2_2_unit ;		
			?>
			<tr>
				<td><?=$year2_2['subj_code']?></td>
				<td><?=$year2_2['description']?></td>
				<td><?=$year2_2_unit?></td>
			</tr>	
		<?php endforeach; ?>
		<?php foreach ($get_year2_2 as $year2_2): ?>
			<tr>
				<th colspan="2">TOTAL UNITS</th>
				<th><?=$year2_2_total?></th>
			</tr>
		<?php break; ?>
		<?php endforeach; ?>
	</tbody>


<!-- 3rd year 1st sem -->
	<thead>
		<?php foreach ($get_year3_1 as $year3_1): ?>
			<tr>
				<th colspan="3"><?=$year3_1['year']?>rd Year</th>
			</tr>
			<tr>
				<th colspan="3"><?=$year3_1['sem']?>st Sem</th>
			</tr>
			<?php  $year3_1_total = 0; break;?>
		<?php endforeach; ?>	
		<?php foreach ($get_year3_1 as $year3_1): ?>
			<tr>
				<th>Course Code</th>
				<th>Description</th>
				<th>Units</th>
			</tr>
		<?php  break; ?>
		<?php endforeach; ?>
	</thead>
	<tbody>
		<?php foreach ($get_year3_1 as $year3_1): $year3_1_unit=+$year3_1['no_units']; ?>
			<?php 	
				  $year3_1_unit = $year3_1['no_units'];
				  $year3_1_total += $year3_1_unit ;		
			?>
			<tr>
				<td><?=$year3_1['subj_code']?></td>
				<td><?=$year3_1['description']?></td>
				<td><?=$year3_1_unit?></td>
			</tr>	
		<?php endforeach; ?>
		<?php foreach ($get_year3_1 as $year3_1): ?>
		<tr>
			<th colspan="2">TOTAL UNITS</th>
			<th><?=$year3_1_total?></th>
		</tr>
		<?php break; ?>
		<?php endforeach; ?>
	</tbody>
	
<!-- 2nd sem -->
	<thead>
		<?php foreach ($get_year3_2 as $year3_2): ?>
			<tr>
				<th colspan="3"><?=$year3_2['year']?>rd Year</th>
			</tr>
			<tr>
				<th colspan="3"><?=$year3_2['sem']?>nd Sem</th>
			</tr>
			<tr>
				<th>Course Code</th>
				<th>Description</th>
				<th>Units</th>
			</tr>
			<?php  $year3_2_total = 0; break;?>
		<?php endforeach; ?>	
	</thead>
	<tbody>
		<?php foreach ($get_year3_2 as $year3_2): $year3_2_unit=+$year3_2['no_units']; ?>
			<?php 	
				  $year3_2_unit = $year3_2['no_units'];
				  $year3_2_total += $year3_2_unit ;		
			?>
			<tr>
				<td><?=$year3_2['subj_code']?></td>
				<td><?=$year3_2['description']?></td>
				<td><?=$year3_2_unit?></td>
			</tr>	
		<?php endforeach; ?>
		<?php foreach ($get_year3_2 as $year3_2): ?>
			<tr>
				<th colspan="2">TOTAL UNITS</th>
				<th><?=$year3_2_total?></th>
			</tr>
		<?php break; ?>
		<?php endforeach; ?>
	</tbody>


<!-- 4th year 1st sem -->
	<thead>
		<?php foreach ($get_year4_1 as $year3_1): ?>
			<tr>
				<th colspan="3"><?=$year4_1['year']?>th Year</th>
			</tr>
			<tr>
				<th colspan="3"><?=$year4_1['sem']?>st Sem</th>
			</tr>
			<?php  $year4_1_total = 0; break;?>
		<?php endforeach; ?>	
		<?php foreach ($get_year4_1 as $year4_1): ?>
			<tr>
				<th>Course Code</th>
				<th>Description</th>
				<th>Units</th>
			</tr>
		<?php  break; ?>
		<?php endforeach; ?>
	</thead>
	<tbody>
		<?php foreach ($get_year4_1 as $year4_1): $year4_1_unit=+$year4_1['no_units']; ?>
			<?php 	
				  $year4_1_unit = $year4_1['no_units'];
				  $year4_1_total += $year4_1_unit ;		
			?>
			<tr>
				<td><?=$year4_1['subj_code']?></td>
				<td><?=$year4_1['description']?></td>
				<td><?=$year4_1_unit?></td>
			</tr>	
		<?php endforeach; ?>
		<?php foreach ($get_year4_1 as $year4_1): ?>
		<tr>
			<th colspan="2">TOTAL UNITS</th>
			<th><?=$year4_1_total?></th>
		</tr>
		<?php break; ?>
		<?php endforeach; ?>
	</tbody>
	
<!-- 2nd sem -->
	<thead>
		<?php foreach ($get_year3_2 as $year3_2): ?>
			<tr>
				<th colspan="3"><?=$year3_2['year']?>rd Year</th>
			</tr>
			<tr>
				<th colspan="3"><?=$year3_2['sem']?>nd Sem</th>
			</tr>
			<tr>
				<th>Course Code</th>
				<th>Description</th>
				<th>Units</th>
			</tr>
			<?php  $year3_2_total = 0; break;?>
		<?php endforeach; ?>	
	</thead>
	<tbody>
		<?php foreach ($get_year3_2 as $year3_2): $year3_2_unit=+$year3_2['no_units']; ?>
			<?php 	
				  $year3_2_unit = $year3_2['no_units'];
				  $year3_2_total += $year3_2_unit ;		
			?>
			<tr>
				<td><?=$year3_2['subj_code']?></td>
				<td><?=$year3_2['description']?></td>
				<td><?=$year3_2_unit?></td>
			</tr>	
		<?php endforeach; ?>
		<?php foreach ($get_year3_2 as $year3_2): ?>
			<tr>
				<th colspan="2">TOTAL UNITS</th>
				<th><?=$year3_2_total?></th>
			</tr>
		<?php break; ?>
		<?php endforeach; ?>
	</tbody>

	</table>

</body>
</html>