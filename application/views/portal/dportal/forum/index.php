
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="<?=site_url('/dportal');?>">Student Portal</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a><i class="icon icon-user"></i>  <span class="text">User: Dean's Office</span></a>
    </li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar">
  <ul>
    <li><a href="<?=site_url('/dportal');?>"><i class="icon icon-home"></i> <span>HOME</span></a> </li>

    <li data-toggle="collapse" data-target="#products" class="collapsed"><a href="#"><i class="icon icon-calendar"></i> <span>CLASS SCHEDULES</span></a> </li>
    <ul class="sub-menu collapse" id="products" style="text-align: left; font-size: 13px;">
      <li><a href="<?=site_url('/addsubject');?>">Add Schedule</a></li>
      <li><a href="<?=site_url('/viewsched');?>">Manage Schedules</a></li>
    </ul>

    <li class="active"><a href="<?=site_url('/forum3');?>"><i class="icon icon-comments-alt"></i> <span>UNIVERSITY FORUM</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
    <a href="<?=site_url('/sportal');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <a href="<?=site_url('/forum2');?>" title="Go to Home" class="tip-bottom"><i class="icon-comments-alt"></i> University Forum</a>
    </div>
  </div>
<!--End-breadcrumbs-->

<!--Content-->
  <div class="container-fluid">
  <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          
          <div class="single_blog_archive wow fadeInUp">
            <h2 class="blog_title"><a href="events-single.html"> Curabitur ac dictum nisl eu hendrerit ante</a></h2>
              <div class="blog_commentbox">
                <p><i class="fa fa-clock-o"></i>Time: 7pm,15 March 2015</p>
                <p><i class="fa fa-map-marker"></i>Location: London,UK</p>                      
              </div>
                <p class="blog_summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                <a class="blog_readmore" href="#">Read More</a>
          </div>

          <div class="single_blog_archive wow fadeInUp">
            <h2 class="blog_title"><a href="events-single.html"> Curabitur ac dictum nisl eu hendrerit ante</a></h2>
              <div class="blog_commentbox">
                <p><i class="fa fa-clock-o"></i>Time: 7pm,15 March 2015</p>
                <p><i class="fa fa-map-marker"></i>Location: London,UK</p>                      
              </div>
                <p class="blog_summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                <a class="blog_readmore" href="#">Read More</a>
          </div>

        </div>
      </div>
  </div>
  </div>
  
  <!--End of Content-->

</div>

    






