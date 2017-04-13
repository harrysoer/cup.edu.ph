<!DOCTYPE html>
<html>
<head>
	<title>Dean's Office</title>
</head>
<body>
	<h3><?=$this->session->first_name." ".$this->session->last_name."<br>".$this->session->college_dept?></h3><br>

	<a href="<?=site_url('do/courses')?>">Courses</a>
	<a href="<?=site_url('do/schedules')?>">Class Schedules</a>
	<a href="<?=site_url('do/professors')?>"> Professors</a>
	<a href="<?=site_url('do/students')?>"> Students</a>


</body>
</html>