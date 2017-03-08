<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>WpF Degree : Home</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>
    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="<?= base_url('assets/for_main/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="<?= base_url('assets/for_main/css/font-awesome.min.css');?>" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="<?= base_url('assets/for_main/css/superslides.css');?>">
    <!-- Slick slider css file -->
    <link href="<?= base_url('assets/for_main/css/slick.css');?>" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="<?= base_url('assets/for_main/css/animate.css'); ?>"> 
    <!-- preloader -->
    <link rel="stylesheet" href="<?= base_url('assets/for_main/css/queryLoader.css');?>" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="<?= base_url('for_main/css/jquery.tosrus.all.css');?>" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="<?= base_url('assets/for_main/css/themes/default-theme.css');?>" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="<?= base_url('assets/for_main/style.css')?>" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
  </head>
  <body>    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar  navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <a class="navbar-brand hidden-xs" href="index.html"><img src="<?=base_url('assets/for_main/img/logo1.png');?>" style="margin-top: -5px; margin-left: 133px;" alt="logo"></a>            
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="index.html">HOME</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">ADMISSIONS</a></li>
                <li><a href="#">ACADEMICS</a></li>
                <li><a href="#">STUDENT LIFE</a></li>                
                <li><a href="<?=site_url('/portal/login');?>">STUDENT PORTAL</a></li>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 

    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="slider">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="slider_area">
            <!-- Start super slider -->
            <div id="slides">
              <ul class="slides-container">                          
                <li>
                  <img src="<?= base_url('assets/for_main/img/slider/2.jpg');?>" alt="img">
                   <div class="slider_caption">
                    <h2>City University of Pasay</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <a class="slider_btn" href="#">Know More</a>
                  </div>
                  </li>
                <!-- Start single slider-->
                <li>
                  <img src="<?= base_url('assets/for_main/img/slider/3.jpg');?>" alt="img">
                   <div class="slider_caption slider_right_caption">
                    <h2>Better Education Environment</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                    <a class="slider_btn" href="#">Know More</a>
                  </div>
                </li>
                <!-- Start single slider-->
                <li>
                  <img src="<?= base_url('assets/for_main/img/slider/4.jpg');?>" alt="img">
                   <div class="slider_caption">
                    <h2>Find out you in better way</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                    <a class="slider_btn" href="#">Know More</a>
                  </div>
                </li>
              </ul>
              <nav class="slides-navigation">
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
    <section id="aboutUs">
      <div class="container">
        <div class="row">
        <!-- Start about us area -->
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="aboutus_area wow fadeInLeft">
            <h2 class="titile">About Us</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="newsfeed_area wow fadeInRight">
            <ul class="nav nav-tabs feed_tabs" id="myTab2">
              <li class="active"><a href="#news" data-toggle="tab">News</a></li>
              <li><a href="#notice" data-toggle="tab">Events</a></li>      
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Start news tab content -->
              <div class="tab-pane fade in active" id="news">                
                <ul class="news_tab">
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?=base_url('assets/for_main/img/news.jpg')?>" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Dummy text of the printing and typesetting industry</a>
                       <span class="feed_date">12.25.16</span>
                      </div>
                    </div>                    
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?=base_url('assets/for_main/img/news.jpg')?>" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Dummy text of the printing and typesetting industry</a>
                       <span class="feed_date">02.14.17</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?=base_url('assets/for_main/img/news.jpg')?>" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Dummy text of the printing and typesetting industry</a>
                       <span class="feed_date">03.05.17</span>
                      </div>
                    </div>
                  </li>
                </ul>                
                <a class="see_all" href="#">See All</a>
              </div>
              <!-- Start notice tab content -->  
              <div class="tab-pane fade " id="notice">
                <div class="single_notice_pane">
                  <ul class="news_tab">
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="<?=base_url('assets/for_main/img/news.jpg')?>" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Dummy text of the printing and typesetting industry</a>
                         <span class="feed_date">27.02.15</span>
                        </div>
                      </div>                   
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="<?=base_url('assets/for_main/img/notice.jpg')?>" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Dummy text of the printing and typesetting industry</a>
                         <span class="feed_date">28.02.15</span>             
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="<?=base_url('assets/for_main/img/notice.jpg')?>" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Dummy text of the printing and typesetting industry</a>
                         <span class="feed_date">28.02.15</span>             
                        </div>
                      </div>
                    </li>                                    
                  </ul>
                  <ul class="news_tab">
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="<?=base_url('assets/for_main/img/notice.jpg');?>" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                         <span class="feed_date">27.02.15</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="<?=base_url('assets/for_main/img/notice.jpg');?>" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Dummy text of the printing and typesetting industry</a>
                         <span class="feed_date">28.02.15</span>          
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="<?=base_url('assets/for_main/img/notice.jpg');?>" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                         <span class="feed_date">28.02.15</span>
                        </div>
                      </div>
                    </li>                                    
                  </ul>
                </div>               
              </div>
              <!-- Start events tab content -->
              
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--=========== END ABOUT US SECTION ================--> 

    <!--=========== BEGIN WHY US SECTION ================-->
    <section id="whyUs">
      <!-- Start why us top -->
      <div class="row">        
        <div class="col-lg-12 col-sm-12">
          <div class="whyus_top">
            <div class="container">
              <!-- Why us top titile -->
              <div class="row">
                <div class="col-lg-12 col-md-12"> 
                  <div class="title_area">
                    <h2 class="title_two" style="color: #fff;">Why Us</h2>
                    <span></span> 
                  </div>
                </div>
              </div>
              <!-- End Why us top titile -->
              <!-- Start Why us top content  -->
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-desktop"></span>
                    </div>
                    <h3>Technology</h3>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-users"></span>
                    </div>
                    <h3>Best Tutor</h3>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-flask"></span>
                    </div>
                    <h3>Practical Training</h3>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-support"></span>
                    </div>
                    <h3>Support</h3>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </div>
              </div>
              <!-- End Why us top content  -->
            </div>
          </div>
        </div>        
      </div>
      <!-- End why us top -->
    </section>
    <!--=========== END WHY US SECTION ================-->

    <!--=========== BEGIN COLLEGEs SECTION ================-->
    <section id="ourCourses">
      <div class="container">
       <!-- Our colleges titile -->
        <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">Colleges</h2>
              <span></span> 
            </div>
          </div>
        </div>
        <!-- End colleges titile -->
        <!-- Start colleges content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourCourse_content">
              <ul class="course_nav">
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/course-1.jpg');?>" />
                      <div class="mask">                         
                        <a href="#" class="course_more">View Courses</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">College of Office Administration and Computer Technology</a></h3>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/course-2.jpg');?>" />
                      <div class="mask">                         
                        <a href="#" class="course_more">View Courses</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">College of Business Administration</a></h3>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </li> 
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/course-1.jpg');?>" />
                      <div class="mask">                         
                        <a href="#" class="course_more">View Courses</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">College of Education</a></h3><br>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </li>  
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/course-2.jpg');?>" />
                      <div class="mask">                         
                        <a href="#" class="course_more">View Courses</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">College of Arts and Sciences</a></h3>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/course-1.jpg" />
                      <div class="mask">                         
                        <a href="#" class="course_more">View Courses</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                   <h3 class="singCourse_title"><a href="#">College of Nursing and Midwifery</a></h3>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </li>          
              </ul>
            </div>
          </div>
        </div>
        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END OUR COURSES SECTION ================-->  

    <!--=========== BEGIN ADMISSION SECTION ================-->
    <section id="ourTutors">
      <div class="container">
       <!-- Our courses titile -->
        <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">Admissions</h2>
              <span></span> 
            </div>
          </div>
        </div>
        <!-- End Our courses titile -->

        <!-- Start Our courses content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourTutors_content">
              <!-- Start Tutors nav -->
              <ul class="tutors_nav">
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="#" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Admission Requirements</h3>
                      <span>"What do I need?"</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="#" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Enrollment Procedures</h3>
                      <span>"How can I enroll?"</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="#" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Scholarship Programs</h3>
                      <span>"How can I apply?"</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="#" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Student<br>Guidelines</h3>
                      <span>"What can I do?"</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="#" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">School <br>Fees</h3>
                      <span>"What's my tuition?"</span>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                  </div>
                </li>                                           
              </ul>
            </div>
          </div>
        </div>
        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END OUR TUTORS SECTION ================-->


    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-3  col-md-3 col-sm-12">
              <div class="single_footer_widget">
                <h3>Contact Us</h3>
                <ul class="footer_widget_nav">
                  <li><p>City University of Pasay</p></li>
                  <li><p>116 Pasadeña St. F.B. Harrison</p></li>
                  <li><p>Pasay City, 1702 Metro Manila</p></li>
                  <li><p>02 551-1342</p></li>
                  <li><p>cupplp@yahoo.com</p></li>
                </ul>
                <ul class="footer_social"> 
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-ld-7  col-md-6 col-sm-12">
              <div class="single_footer_widget">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.9586737010322!2d120.99332631439587!3d14.544355989838316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c95db1d54c57%3A0x32954ce2a43d59a3!2sCity+University+Of+Pasay!5e0!3m2!1sen!2sph!4v1487356928166" width="450" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
            <!-- <div class="col-ld-7 col-md-4 col-sm-12">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <!-- End footer top area -->

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> C.U.P. | Copyright &copy; All Rights Reserved</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                <p>Designed & Developed by <a href="http://wpfreeware.com/" rel="nofollow">TExeggutor</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="<?= base_url('assets/for_main/js/queryloader2.min.js" type="text/javascript');?>"></script>
    <!-- For smooth animatin  -->
    <script src="<?= base_url('assets/for_main/js/wow.min.js');?>"></script>  
    <!-- Bootstrap js -->
    <script src="<?= base_url('assets/for_main/js/bootstrap.min.js');?>"></script>
    <!-- slick slider -->
    <script src="<?= base_url('assets/for_main/js/slick.min.js');?>"></script>
    <!-- superslides slider -->
    <script src="<?= base_url('assets/for_main/js/jquery.easing.1.3.js');?>"></script>
    <script src="<?= base_url('assets/for_main/js/jquery.animate-enhanced.min.js');?>"></script>
    <script src="<?= base_url('assets/for_main/js/jquery.superslides.min.js');?>" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="<?= base_url('assets/for_main/js/jquery.tosrus.min.all.js');?>"></script>   
   
    <!-- Custom js-->
    <script src="<?= base_url('assets/for_main/js/custom.js');?>"></script>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->


  </body>
</html>