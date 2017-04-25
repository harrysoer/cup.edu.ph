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
                <li><a href="<?=site_url();?>">HOME</a></li>
                <li class="dropdown"><a href="<?=site_url('/about');?>">ABOUT US</a>
                  <ul class="dropdown-menu">
                  <li><a href="<?=site_url('/about');?>">Our History</a></li>
                  <li><a href="<?=site_url('/mvg');?>">Mission | Vision | Goals</a></li>
                  <li><a href="<?=site_url('/adm');?>">Administrators</a></li>
                  <li><a href="<?=site_url('/gallery');?>">Gallery</a></li>
                  <li><a href="<?=site_url('/hymn');?>">C.U.P. Hymn</a></li>
                  </ul>
                </li>
                <li><a href="<?=site_url('/admission');?>">ADMISSIONS</a></li>
                <li class="dropdown active"><a href="<?=site_url('/academic');?>">ACADEMICS</a>
                  <ul class="dropdown-menu">
                  <li><a href="<?=site_url('/coact');?>">College of Office Administration and Computer Technology</a></li>
                  <li><a href="<?=site_url('/cba');?>">College of Business Administration</a></li>
                  <li><a href="<?=site_url('/coe');?>">College of Education</a></li>
                  <li><a href="<?=site_url('/coas');?>">College of Arts and Sciences</a></li>
                  <li><a href="<?=site_url('/conm');?>">College of Nursing and Midwifery</a></li>
                  </ul>
                </li>
                <li><a href="<?=site_url('/studentlife');?>">STUDENT LIFE</a></li>                
                <li><a href="<?=site_url('/portal/login');?>">STUDENT PORTAL</a></li>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 


   <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2>Academics</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="courseArchive_content">
              <div class="row">
                <!-- start single course -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_course wow fadeInUp">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/course5.png');?>" />
                      <div class="mask">                         
                        <a href="<?=site_url('/coact');?>" class="course_more">View More</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="<?=site_url('/coact');?>">College of Office Administration and Computer Technology</a></h3>
                    </div>
                  </div>
                </div>
                <!-- End single course -->
                <!-- start single course -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_course wow fadeInUp">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/course2.jpg');?>" />
                      <div class="mask">                         
                        <a href="<?=site_url('/cba');?>" class="course_more">View More</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="<?=site_url('/cba');?>">College of Business Administration</a></h3><br>
                    </div>
                  </div>
                </div>
                <!-- End single course -->
                <!-- start single course -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_course wow fadeInUp">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/course3.jpg');?>">
                      <div class="mask">                         
                        <a href="<?=site_url('/coe');?>" class="course_more">View More</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="<?=site_url('/coe');?>">College of Education</a></h3><br>
                    </div>
                  </div>
                </div>
                <!-- End single course -->
                <!-- start single course -->
                <div class="col-lg-4 col-md-4 col-sm-4" style="margin-left: -195px; margin-right: 10px">
                  <div class="single_course wow fadeInUp">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/course1.png');?>" />
                      <div class="mask">                         
                        <a href="<?=site_url('/coas');?>" class="course_more">View More</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="<?=site_url('/coas');?>">College of Arts and Sciences</a></h3>
                    </div>
                  </div>
                </div>
                <!-- End single course -->
                <!-- start single course -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_course wow fadeInUp">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/course4.jpg');?>" />                      
                      <div class="mask">                         
                        <a href="<?=site_url('/conm');?>" class="course_more">View More</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="<?=site_url('/conm');?>">College of Nursing and Midwifery</a></h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4" style="margin-left: 393px;">
                  <div class="single_course wow fadeInUp">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/calendar.jpg');?>" />                      
                      <div class="mask">                         
                        <a href="<?=site_url('calendar')?>" class="course_more">View Calendar</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="<?=site_url('calendar')?>"><center>Academic Calendar</center></a></h3>
                    </div>
                  </div>
                </div>
                <!-- End single course -->
               
              </div>
              
            </div>
          </div>
          <!-- End course content -->
            </div>
          </div>
          <!-- start course archive sidebar -->
        </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->