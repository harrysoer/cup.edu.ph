
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Student Portal</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a><i class="icon icon-user"></i>  <span class="text">User: Student</span></a>
    </li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar">
  <ul>
    <li class="active"><a href="<?=site_url('/sportal');?>"><i class="icon icon-home"></i> <span>HOME</span></a> </li>
    <li><a href="<?=site_url('/info');?>"><i class="icon icon-user"></i> <span>MY INFO</span></a> </li>
    <li><a href="<?=site_url('/grades');?>"><i class="icon icon-edit"></i> <span>MY GRADES</span></a> </li>
    <li><a href="<?=site_url('/schedules');?>"><i class="icon icon-calendar"></i> <span>MY SCHEDULES</span></a> </li>
    <li><a href="<?=site_url('/curriculum');?>"><i class="icon icon-list-alt"></i> <span>COURSE CURRICULUM</span></a> </li>
    <li><a href="<?=site_url('/forum2');?>"><i class="icon icon-comments-alt"></i> <span>UNIVERSITY FORUM</span></a></li>
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

    






