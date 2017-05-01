<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Portal</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> -->
<script
  src="https://code.jquery.com/jquery-3.2.0.js"
  integrity="sha256-wPFJNIFlVY49B+CuAIrDr932XSb6Jk3J1M22M3E2ylQ="
  crossorigin="anonymous"></script>


<link rel="stylesheet" href="<?=base_url('assets/for_sportal/css/bootstrap.min.css');?>" />
<link rel="stylesheet" href="<?=base_url('assets/for_sportal/css/bootstrap-responsive.min.css');?>" />
<link rel="stylesheet" href="<?=base_url('assets/for_sportal/css/fullcalendar.css');?>" />
<link rel="stylesheet" href="<?=base_url('assets/for_sportal/css/matrix-style.css');?>" />
<link rel="stylesheet" href="<?=base_url('assets/for_sportal/css/matrix-media.css');?>" />
<link href="<?=base_url('assets/for_sportal/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
<link rel="stylesheet" href="<?=base_url('assets/for_sportal/css/jquery.gritter.css');?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

<style>
	
	tr td:nth-child(odd) {
    text-align: center;
	}
	
	tr td:nth-child(5) {
	    text-align: right;
	}
	t
</style>


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
        '<div class="controls controls-row">'+
                '<input type="text" style="width:10rem; margin-left:-5rem;" class="span3 m-wrap" id="textbox'+counter+'" name="subject_id[]" placeholder="Subject/Course Code" required="">'+
                '<input type="text" class="span4 m-wrap" id="textbox'+counter+'" name="description[]" placeholder="Description" required="">'+
                '<input type="text" class="span2 m-wrap" id="textbox'+counter+'" name="units[]" placeholder="No. of Units" required="">'+
                '<input type="text" class="span1 m-wrap" id="textbox'+counter+'" name="sem[]" placeholder="Sem." required="">'+
                '<input type="text" class="span1 m-wrap" id="textbox'+counter+'" name="year[]" placeholder="Year" required="">'+
              '</div>'+
                '<input type="hidden" id="hide" name="count" value="'+counter+'" required="">'
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
