<!DOCTYPE html>
<html>
<head>
	<title>Dean's Office</title>
</head>
<body>

	<a href="<?=site_url('do/courses')?>">Courses</a>
	<a href="<?=site_url('do/schedules')?>">Class Schedules</a>
	<a href="<?=site_url('do/professors')?>"> Professors</a>
	<a href="<?=site_url('do/students')?>"> Students</a>
<br>

	<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
	<?php endif; ?>

	<?=form_open('do/courses/add')?>
	<fieldset>
	<legend><h2>Add Course</h2></legend>
	 <?php if (isset($error)) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            </div>
        <?php endif; ?>

		<input type="text" id="course" name="course" placeholder="Name of course" required="">
		<input type="text" id="years" name="years" placeholder="number of years" required="">
		<input type="text" id="abbrv" name="abbrv" placeholder="Abriviation" required="">
		<br><input type="submit" name="Add Course">
	</fieldset>
	</form>
</body>
</html>