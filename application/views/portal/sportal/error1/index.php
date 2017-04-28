
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
    <li><a href="<?=site_url('/sportal');?>"><i class="icon icon-home"></i> <span>HOME</span></a> </li>
    <li><a href="<?=site_url('/info');?>"><i class="icon icon-user"></i> <span>MY INFO</span></a> </li>
    <li class="active"><a href="<?=site_url('/grades');?>"><i class="icon icon-edit"></i> <span>MY GRADES</span></a> </li>
    <li><a href="#"><i class="icon icon-calendar"></i> <span>MY SCHEDULES</span></a> </li>
    <li><a href="#"><i class="icon icon-list-alt"></i> <span>COURSE CURRICULUM</span></a> </li>
    <li><a href="#"><i class="icon icon-comments-alt"></i> <span>UNIVERSITY FORUM</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
    <a href="<?=site_url('/sportal');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <a href="<?=site_url('/info');?>" title="Go to Home" class="tip-bottom"><i class="icon-edit"></i> My Grades</a>
    </div>
  </div>
<!--End-breadcrumbs-->

<!--Content-->
  <div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
    <div class="widgetbox">
      <div class="widget-content">
            <div class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading">NOTICE!</h4><br>
              Grades are still not available as of now. Grades will be uploaded after the semester ends.</div><br>
      </div>
    </div>
    </div>
  </div>
  </div>
  <!--End of Content-->

</div>

    






