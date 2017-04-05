
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
              <a class="navbar-brand hidden-xs" href="<?=site_url();?>"><img src="<?=base_url('assets/for_main/img/logo1.png');?>" style="margin-top: -5px; margin-left: 133px;" alt="logo"></a>            
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="<?=site_url();?>">HOME</a></li>
                <li><a href="<?=site_url('/about');?>">ABOUT US</a></li>
                <li><a href="<?=site_url('/admission');?>">ADMISSIONS</a></li>
                <li><a href="<?=site_url('/academic');?>">ACADEMICS</a></li>
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
                  <img src="<?= base_url('assets/for_main/img/slider/1.jpg');?>" alt="img">
                   <div class="slider_caption">
                    <br><br><br><br><h2>City University of Pasay</h2>
                    <p>A Premier, Globally Competitive and Value-laden Institute - connecting, transforming, and trancending for academic excellence.</p>
                    <a class="slider_btn" href="#">Know More</a>
                  </div>
                  </li>
                <!-- Start single slider-->
                <li>
                  <img src="<?= base_url('assets/for_main/img/slider/2.jpg');?>" alt="img">
                   <div class="slider_caption slider_right_caption">
                    <br><br><br><br><h2>Better Education Environment</h2>
                    <p>Nurturing, Inspiring and Empowering Future Leaders.</p>
                    <a class="slider_btn" href="#">Know More</a>
                  </div>
                </li>
                <!-- Start single slider-->
                <li>
                  <img src="<?= base_url('assets/for_main/img/slider/3.jpg');?>" alt="img">
                   <div class="slider_caption">
                    <br><br><br><br><h2>Find out you in better way</h2>
                    <p>See yourself in a value-laden institute with ensured quality and competitive education for a brighter future in your career.</p>
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
            <p>The Pamantasan Ng Lungsod Ng Pasay (PLP) was founded on May 26, 1994 by virtue of City Ordinance No. 3939, as amended by City Ordinance No. 4155. The Constitution was conceptualized by the late Mayor Hon. Pablo N. Cuneta, and the city councilors. Its major purpose was to provide quality education at a minimal cost to the less privileged but deserving students of the city and to some others who can meet certain admission requirements set forth by the Board of Regents. Pamantasan Ng Lungsod Ng Pasay (PLP) has been renamed “City University of Pasay” (CUP), by virtue of an amendment made in a year 2011 (City Ordinance No. 4604, S-2011). The latest of the series of amendment to CUP Charter is Ordinance No. 5363, series of 2013 which amended Section 1&amp; 2 of Article 3; Section 3 of Article 4 of Ordinance No. 4604, Series of 2011.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="newsfeed_area wow fadeInRight">
            <ul class="nav nav-tabs feed_tabs" id="myTab2">
              <li class="active"><a href="#news" data-toggle="tab">News</a></li>
              <!-- <li><a href="#notice" data-toggle="tab">Events</a></li>       -->
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Start news tab content -->
              <div class="tab-pane fade in active" id="news">                
                <ul class="news_tab">
                  <!-- <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?//=base_url('assets/for_main/img/news.jpg')?>" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Dummy text of the printing and typesetting industry</a>
                       <span class="feed_date">12.25.16</span>
                      </div>
                    </div>                    
                  </li> -->
                  <?php foreach ($news_item as $news): ?>
                        <li>
                          <div class="media">
                            <div class="media-left">
                              <!-- <a class="news_img" href="#">
                                <img class="media-object" src="<?//=base_url('assets/for_main/img/news.jpg')?>" alt="img">
                              </a> -->
                            </div>
                            <div class="media-body">
                             <a href="<?=site_url('/news/').$news['slug']?>"><?= $news['title']?></a>
                             <span class="feed_date"><?= $news['dates']?></span>
                            </div>
                          </div>
                        </li>
                  <?php endforeach; ?>
                  
                </ul>                
                <a class="see_all" href="<?=site_url('/news')?>">See All</a>
              </div>
              <!-- Start notice tab content -->  
              <!-- <div class="tab-pane fade " id="notice">
                <div class="single_notice_pane">
                  <ul class="news_tab">
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="<?//=base_url('assets/for_main/img/news.jpg')?>" alt="img">
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
                            <img class="media-object" src="<?//=base_url('assets/for_main/img/notice.jpg')?>" alt="img">
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
                            <img class="media-object" src="<?//=base_url('assets/for_main/img/notice.jpg')?>" alt="img">
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
                            <img class="media-object" src="<?//=base_url('assets/for_main/img/notice.jpg');?>" alt="img">
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
                            <img class="media-object" src="<?//=base_url('assets/for_main/img/notice.jpg');?>" alt="img">
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
                            <img class="media-object" src="<?//=base_url('assets/for_main/img/notice.jpg');?>" alt="img">
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
              </div> -->
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
                    <h3>Facilities</h3>
                    <p>We provide quality academic service in terms of people and in programs.</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-users"></span>
                    </div>
                    <h3>Quality Education</h3>
                    <p>We offer globally competitive education to our students for a successful career.</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-flask"></span>
                    </div>
                    <h3>Low Cost</h3>
                    <p>We provide affordable education to students in Pasay City.</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="single_whyus_top wow fadeInUp">
                    <div class="whyus_icon">
                      <span class="fa fa-support"></span>
                    </div>
                    <h3>Good Environment</h3>
                    <p>We are continually growing and transforming aiming for academic excellence.</p>
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
                      <img src="<?=base_url('assets/for_main/img/course5.png');?>" />
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
                      <img src="<?=base_url('assets/for_main/img/course2.jpg');?>" />
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
                      <img src="<?=base_url('assets/for_main/img/course3.jpg');?>" />
                      <div class="mask">                         
                        <a href="#" class="course_more">View Courses</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">College of Education</a></h3><br>
                    <p>Produces future educators who are committed in providing good moral values and the highest quality of education.</p>
                  </div>
                </li>  
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/course1.png');?>" />
                      <div class="mask">                         
                        <a href="#" class="course_more">View Courses</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">College of Arts and Sciences</a></h3>
                    <p><br>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/course4.jpg');?>" />
                      <div class="mask">                         
                        <a href="#" class="course_more">View Courses</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                   <h3 class="singCourse_title"><a href="#">College of Nursing and Midwifery</a></h3><br>
                    <p>Developing quality health care professionals through world class education.</p>
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
                      <img src="<?=base_url('assets/for_main/img/ad1.jpg');?>" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Admission Requirements</h3>
                      <span>"What do I need?"</span>
                      <p>Interested? Find out the things you need for your application here!</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="<?=base_url('assets/for_main/img/ad2.png');?>" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Enrollment Procedures</h3>
                      <span>"How can I enroll?"</span>
                      <p>Follow this easy steps in processing your application with us!</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="<?=base_url('assets/for_main/img/ad3.jpg');?>" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Scholarship Programs</h3>
                      <span>"How can I apply?"</span>
                      <p>Want to have this awesome previleges? Here's how you apply.<p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="<?=base_url('assets/for_main/img/ad4.jpg');?>"/>                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Student<br>Guidelines</h3>
                      <span>"What can I do?"</span>
                      <p>Here's a guide to help you when you're confused with our procedures.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="<?=base_url('assets/for_main/img/ad5.jpg');?>" />                      
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">School <br>Fees</h3>
                      <span>"What's my tuition?"</span>
                      <p>Check out the complete list &amp; computation of your matriculation!</p>
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
