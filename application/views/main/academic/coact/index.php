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
    <section style="margin-top: 77px;">
      
    </section>
     <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
        <!-- start course archive sidebar -->
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="courseArchive_sidebar">
             <!-- start single sidebar -->
              <div class="single_sidebar">
                <ul class="news_tab">
                  <li class="active">
                    <div class="media">
                      <div class="media-left">
                        <a href="#" class="news_img">
                          <img alt="img" src="<?=base_url('assets/for_main/img/course5.png');?>" class="media-object">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="<?=site_url('/coact');?>" style="color: #fdcd3d;">College of Office Administration and Computer Technology</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a href="#" class="news_img">
                          <img alt="img" src="<?=base_url('assets/for_main/img/course2.jpg');?>" class="media-object">
                        </a>
                      </div>
                      <div class="media-body" style="padding-top: 17px;">
                       <a href="<?=site_url('/cba');?>">College of Business Administration</a>
                      </div>
                    </div>
                  </li>  
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a href="#" class="news_img">
                          <img alt="img" src="<?=base_url('assets/for_main/img/course3.jpg');?>" class="media-object">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="<?=site_url('/coe');?>"><br>College of Education</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a href="#" class="news_img">
                          <img alt="img" src="<?=base_url('assets/for_main/img/course1.png');?>" class="media-object">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="<?=site_url('/coas');?>"><br>College of Arts and Sciences</a>              
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a href="#" class="news_img">
                          <img alt="img" src="<?=base_url('assets/for_main/img/course4.jpg');?>" class="media-object">
                        </a>
                      </div>
                      <div class="media-body" style="padding-top: 17px;">
                       <a href="<?=site_url('/conm');?>">College of Nursing and Midwifery</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-body">
                       <a href="<?=site_url('/acadar');?>"><span class="glyphicon glyphicon-calendar fa-lg" style="padding-right: 48px; padding-left: 43px;"></span>Academic Calendar</a>
                      </div>
                    </div>
                  </li> 
                </ul>
              </div>
            </div>
              <!-- End single sidebar -->

               <!-- start course content -->
          <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog">
                    <div class="blogimg_container">
                      <a>
                        <img src="<?=base_url('assets/for_main/img/course5.png');?>" style="margin-left: 90px;" />
                      </a>
                    </div>
                      <h2 class="blog_title">College of Office Administration and Computer Technology</h2>

                      <h3>Vision:</h3>
<p>The College of Office Administration and Computer Technology envision itself to the formationof students and to professionals to become community and service oriented individuals, value laden and equipped with globally competitive knowledge and skills.</p>
<h3>Mission:</h3>
<p>The College of Office Administration and Computer Technology is committed to educate the students to become self-directed, responsible, environmental caring citizens and professionally competent to cope up with the different challenges of life.</p>
<h3>Philosophy:</h3>
<p>The College of Office Administration and Computer Technology upholds the philosophy of developing the potentials of students towards excellence and expertise through imbibing the core values of commitment, integrity, quality, professionalism and service that will help us globally competitive.</p>
<h4><br></h4>


                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Courses Offered
                        <i class="more-less glyphicon glyphicon-plus" style="padding-left: 380px;"></i>
                        
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                      <ol>
                      <li style="text-align: justify;">  Bachelor of Science in Office Administration</li><br>
                      <li style="text-align: justify;">  Associate in Computer Technology</li>
                      </ol>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    C.O.A.C.T. Organization
                        <i class="more-less glyphicon glyphicon-plus" style="padding-left: 319px;"></i>
                        
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
                    
                    
                    


                                     
                  </div>                 
                </div>
                <!-- End single blog -->                
              </div>
              <!-- end blog archive  -->                       
            </div>
          </div>
          <!-- End course content -->





          </div>
          <!-- start course archive sidebar -->
        </div>
      
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
