<!DOCTYPE html>
<html>
<head>
	<title>Dean's Office</title>
<script
  src="https://code.jquery.com/jquery-3.2.0.js"
  integrity="sha256-wPFJNIFlVY49B+CuAIrDr932XSb6Jk3J1M22M3E2ylQ="
  crossorigin="anonymous"></script>


	<script type="text/javascript">

		$(document).ready(function(){

		    var counter = 2;

		    $("#addButton").click(function () {

			if(counter>10){
		            alert("Only 10 subjects/courses are allowed to add at a time");
		            return false;
			}

			var newTextBoxDiv = $(document.createElement('div'))
			     .attr("id", 'TextBoxDiv' + counter);

			newTextBoxDiv.after().html(
				'<input type="text" name="subject_id[]" id="textbox' + counter + '" placeholder="Subject/Course Code" required="" > '+
				'<input type="text" name="description[]" id="textbox' + counter + '" placeholder="Description" required="" > '+
				'<input type="text" name="units[]" id="textbox' + counter + '" placeholder="No. of Units" required=""> '+
				'<input type="text" name="sem[]" id="textbox' + counter + '" placeholder="Semester" required=""> '+
				'<input type="text" name="year[]" id="textbox' + counter + '" placeholder="Year" required=""><br>'+
				'<input type="hidden" name="count" id="textbox' + counter + '" name="count" value="'+counter+'" required=""><br>'
				);

			newTextBoxDiv.appendTo("#TextBoxesGroup");


			counter++;
		     });

		     $("#removeButton").click(function () {
			if(counter==1){
		          alert("No more textbox to remove");
		          return false;
		       }

			counter--;

		        $("#TextBoxDiv" + counter).remove();

		     });

		});
		</script>
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

	<?=form_open('do/subjects/add/'.$url.'/'.$cu)?>
	<fieldset>
	<legend><h2>Add Courses/Subjects</h2></legend>
	
	<div id="TextBoxesGroup">
		<div id="TextBoxDiv1">
			<input type="text" id="Subject_id" name="subject_id[]" placeholder="Subject/Course Code" required="">
			<input type="text" id="description1" name="description[]" placeholder="Description" required="">
			<input type="text" id="units1" name="units[]" placeholder="No. of Units" required="">
			<input type="text" id="sem1" name="sem[]" placeholder="Semester" required="">
			<input type="text" id="year1" name="year[]" placeholder="Year" required="">
			<input type="hidden" id="hide" name="count" value="1" required="">
		</div>
	</div>

		<br><input type="submit" value="Save Course/Subject">
		<input type="button" value="Add More Course/Subject" id="addButton">
		<input type='button' value='Remove Button' id='removeButton'>

	</fieldset>
	</form>
</body>
</html>