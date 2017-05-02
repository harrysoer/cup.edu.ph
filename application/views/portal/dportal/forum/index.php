
<!--sidebar-menu-->
<div id="sidebar">
  <ul>
    <li><a href="<?=site_url('/dportal');?>"><i class="icon icon-home"></i> <span>HOME</span></a> </li>
    <li ><a href="<?=site_url('/dportal/course');?>"><i class="icon icon-th-list"></i> <span>Courses</span></a> </li>
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
    <a href="<?=site_url('/dportal');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <a href="<?=site_url('/forum3');?>" title="Go to Home" class="tip-bottom"><i class="icon-comments-alt"></i> University Forum</a>
    </div>
  </div>
<!--End-breadcrumbs-->

<!--Content-->
  <div class="container-fluid">
  <div class="row-fluid">
      <div class="span12">
        <ul class="quick-actions">
          <li class="bg_lb"> 
            <a href="<?=site_url('forum/create')?>" class="btn-lg btn-success"> 
              <i class="icon-pencil"></i>  Create A Topic
            </a>
          </li>
         <!--  <li class="bg_lb"> 
            <a href="<?=site_url('forum/create')?>" class="btn-lg btn-info"> 
              <i class="icon-list"></i>  My Topic(s)
            </a>
          </li> -->
        </ul>
        <div class="widget-box">
        <?php foreach ($get_posts as $posts): ?>
          <div class="single_blog_archive wow fadeInUp">
            <h2 class="blog_title"><a href="<?=site_url('/forum/post/').$posts['id_posts']?>"><?=$posts['title']?></a></h2>
              <div class="blog_commentbox">
                <p><i class="fa fa-clock-o"></i>Time:&nbsp;&nbsp;<?=$posts['time'].','.$posts['dates']?> </p>
                <p><i class="fa fa-person"></i>By:&nbsp;&nbsp;<?=$posts['author']?> </p>                      
              </div>
                <p class="blog_summary">
                <?php 
                        $strip = strip_tags( $posts['text']);
                        $string = $strip;
                        if (strlen($string) > 300) {

                            // truncate string
                            $stringCut = substr($string, 0, 300);

                            // make sure it ends in a word so assassinate doesn't become ass...
                            $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
                        }
                        echo $string;
                      ?>

                </p>
                <a class="blog_readmore" href="<?=site_url('/forum/post/').$posts['id_posts']?>">Read More</a>
          </div>
        <?php endforeach ?>
        </div>
      </div>
  </div>
  </div>
  
  <!--End of Content-->

</div>

    






