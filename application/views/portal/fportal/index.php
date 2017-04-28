
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="<?=site_url('/dportal');?>">Student Portal</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a><i class="icon icon-user"></i>  <span class="text">User: Faculty</span></a>
    </li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar">
  <ul>
    <li class="active"><a href="<?=site_url('/fportal');?>"><i class="icon icon-home"></i> <span>HOME</span></a> </li>

    <li data-toggle="collapse" data-target="#options" class="collapsed"><a href="#"><i class="icon icon-calendar"></i> <span>MY CLASSES</span></a> 
    </li>
      <ul class="sub-menu collapse" id="options" style="text-align: left; font-size: 13px;">
      <li><a href="<?=site_url('/classes');?>">Manage Class Grades</a></li>
      <li><a href="<?=site_url('/viewclass');?>">View Class Schedules</a></li>
      </ul>
    
    <li><a href="<?=site_url('/forum4');?>"><i class="icon icon-comments-alt"></i> <span>UNIVERSITY FORUM</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
    <a href="<?=site_url('/sportal');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a>
    </div>
  </div>
<!--End-breadcrumbs-->

<!--Content-->
  <div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
    <div class="widgetbox">
      <center><img src="<?=base_url('/assets/for_sportal/img/logo2.png');?>" style="margin-top: 50px; min-width: 100px; min-height: 100px;" /></center>
    </div>
    <div class="home-title">
      <center><h1 style="letter-spacing: 3px; color: #4a7f43; font-family: Old English Text MT;">City University of Pasay</h1></center><br><br>
      <center><h1 style="letter-spacing: 5px;">WELCOME, Harry Angelo Soer</h1></center>
      <br><br>
      <hr style="width: 70%; height: 5px; margin-left: auto; margin-right: auto; border-color: #666; border-style: inset;">
      <br><br><br><br>
      <center><h4 style="font-family: Script MT Bold; color: #fdc726;">"A Premier, Globally Competitive and Value-laden<br>Institute - connecting, transforming, and trancending for academic excellence."</h4></center>
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

    






