<!--sidebar-menu-->
<div id="sidebar">
  <ul>
    <li class="active"><a href="<?=site_url('/dportal');?>"><i class="icon icon-home"></i> <span>HOME</span></a> </li>
    <li><a href="<?=site_url('/dportal/course');?>"><i class="icon icon-th-list"></i> <span>Courses</span></a> </li>
    <li data-toggle="collapse" data-target="#products" class="collapsed"><a href="#"><i class="icon icon-calendar"></i> <span>CLASS SCHEDULES</span></a> </li>
    <ul class="sub-menu collapse" id="products" style="text-align: left; font-size: 13px;">
      <li><a href="<?=site_url('/addsubject');?>">Add Subject</a></li>
      <li><a href="<?=site_url('/viewsched');?>">Manage Schedules</a></li>
    </ul>
    <li class><a href="<?=site_url('/dportal/faculty');?>"><i class="icon icon-user-md"></i> <span>Faculty</span></a> </li>
    <li class><a href="<?=site_url('/dportal/students');?>"><i class="icon icon-user"></i> <span>Students</span></a> </li>
    <li><a href="<?=site_url('/forum3');?>"><i class="icon icon-comments-alt"></i> <span>UNIVERSITY FORUM</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
    <a href="<?=site_url('/dportal');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a>
    </div>
  </div>
<!--End-breadcrumbs-->

<!--Content-->
  <div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
    <div class="widgetbox">
      <center><img src="<?=base_url('/assets/for_sportal/img/logo2.png');?>" style="margin-top: 1rem; min-width: 100px; min-height: 100px;" /></center>
    </div>
    <div class="home-title">
      <center><h1 style="letter-spacing: 3px; color: #4a7f43; font-family: Old English Text MT;">City University of Pasay</h1></center><br><br>
      <center><h1 style="letter-spacing: 5px;">WELCOME,<?=$this->session->first_name." ".$this->session->last_name?></h1></center>
      <br>
      <center><h2 style="letter-spacing: 5px;">-<?=$this->session->college_dept?>-</h2></center>
      <center><h2 style="letter-spacing: 5px;">Current Sem &amp; Year:</h2></center>
      <center><h2 style="letter-spacing: 5px;"><?=$this->session->sem.", ".$this->session->school_year?></h2></center>
      <hr style="width: 70%; height: 5px; margin-left: auto; margin-right: auto; border-color: #666; border-style: inset;">
      <br><br>
      <center><h4 style="font-family: Script MT Bold; color:  #808000;">"A Premier, Globally Competitive and Value-laden<br>Institute - connecting, transforming, and trancending for academic excellence."</h4></center>
    </div>
    </div>
  </div>
  </div>
  <!--End of Content-->

</div>

<script type="text/javascript">
  $(".dropdown-menu li a").click(function(){
  $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
  $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
});
</script>

    






