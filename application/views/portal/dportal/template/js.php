<script src="<?=base_url('assets/for_sportal/js/jquery.min.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/excanvas.min.js');?>"></script> 
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
<script src="<?=base_url('assets/for_sportal/js/wysihtml5-0.3.0.js');?>"></script> 
<script src="<?=base_url('assets/for_sportal/js/bootstrap-wysihtml5.js');?>"></script> 

<script type="text/javascript">
  $document.ready(function(){

   $("#sidebar ul").append("<li><a href="<?=site_url('/dportal');?>"><i class="icon icon-home"></i> <span>HOME</span></a> </li>");
  });
</script>

<script type="text/javascript">
  $(".dropdown-menu li a").click(function(){
  $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
  $(this).parents(".dropdown").find('.btn').val($(this).data('value'));

  $("td").css("text-align", "center");
});
</script>

<script type="text/javascript">

  //for hover 
    $('#other').popover({title: "What is this?", content: "<span style=\"color:blue;\">EDIT</span> or <span style=\"color:red;\">DELETE</span> some items", trigger: "hover"}); 

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
  $(".dropdown-menu li a").click(function(){
  $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
  $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
});
</script>

<script>
  $('.textarea_editor').wysihtml5();
</script>

</body>
</html>