<script src="<?=base_url('assets/for_sportal/js/excanvas.min.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/jquery.min.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/jquery.ui.custom.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/bootstrap.min.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/jquery.flot.min.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/jquery.flot.resize.min.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/jquery.peity.min.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/fullcalendar.min.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/matrix.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/matrix.dashboard.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/jquery.gritter.min.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/matrix.interface.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/matrix.chat.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/jquery.validate.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/matrix.form_validation.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/jquery.wizard.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/jquery.uniform.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/select2.min.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/matrix.popover.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/jquery.dataTables.min.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/matrix.tables.js');?>"></script> 

<script type="text/javascript">
  $(".dropdown-menu li a").click(function(){
  $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
  $(this).parents(".dropdown").find('.btn').val($(this).data('value'));

  $("td").css("text-align", "center");
});
</script>

<script type="text/javascript">

  //for hover 
    $('#other').popover({title: "What is this?", content: "<span style=\"color:blue;\">EDIT</span> or <span style=\"color:red;\">DELETE</span> a course in your list", trigger: "hover"}); 

  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>

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
</body>
</html>