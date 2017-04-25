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
                       <a href="<?=site_url('/coact');?>">College of Office Administration and Computer Technology</a>
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
                       <a href="<?=site_url('/conm');?>" style="color: #fdcd3d;">College of Nursing and Midwifery</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a href="#" class="news_img">
                          <img alt="img" src="<?=base_url('assets/for_main/img/calendar.jpg');?>" class="media-object">
                        </a>
                      </div>
                      <div class="media-body" style="padding-top: 17px;">
                       <a href="<?=site_url('/acadcal');?>">Academic Calendar</a>
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
                        <img src="<?=base_url('assets/for_main/img/course4.jpg');?>" style="margin-left: 90px;" />
                      </a>
                    </div>
                      <h2 class="blog_title">College of Nursing and Midwifery</h2>

                      <h3>Vision:</h3>
<p>Envisions a world class center for educational excellence and value-laden health care professionals.</p>
<h3>Mission:</h3>
<p><b>PRODUCE</b> quality health care professionals through world class education and highly competent educators.</p><br>
<p><b>PROVIDE</b> education that upholds the PLPians and Pasayenos value (Loyalty, Respectfulness, being Humanitarian and Innovativeness) through collaborative efforts of faculty, school administration and local government.</p><br>
<p><b>PROMOTE</b> core values as integrated to the educational system in the delivery of optimum quality health care.</p><br>
<p><b>PURSUE</b> highly competitive skills in maintaining the ideals of the vocation of future health care professionals through continuing education, community extension, training and research.</p><br>
<p><b>PRACTICE</b> the profession efficiently wit primary purpose to be of service to God and mankind.</p>

<h4><br></h4>


                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Courses Offered
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                      <ol>
                      <li>  Bachelor of Science in Nursing</li><br>
                      <li>  Associate in Midwifery</li>
                      </ol>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    C.O.N.M. Organization
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    <center>
                        <div>
                        <img src="<?=base_url('/assets/for_main/img/college/e1.jpg');?>" class="img-thumbnail" style="max-height: 200px; max-width: 200px;" />
                          <h5><b> IRIS CASTILLON, RN, RM, MAEd, MAN</b></h5>
                          <h5><i> Dean </i></h5>
                        </div><br>
                      </center>

                        <div class="col-lg-6 col-md-6 col-sm-6"><center>
                        <img src="<?=base_url('/assets/for_main/img/college/e2.jpg');?>" class="img-thumbnail" style="max-height: 200px; max-width: 200px;" />
                        <h5><b> MS. SUSAN ESPADON, RN, MAN </b></h5>
                        <h5><i> Academic Coordinator </i></h5>
                        </div></center>

                        <div class="col-lg-6 col-md-6 col-sm-6"><center>
                        <img src="<?=base_url('/assets/for_main/img/college/e3.jpg');?>" class="img-thumbnail" style="max-height: 200px; max-width: 200px;" />
                        <h5><b> MS. ARACELI FRANCISCO, RND, RN, MAN </b></h5>
                        <h5><i> Clinical Coordinator </i></h5>
                        </div></center>

                        <center><h5 style="padding-bottom: 20px; padding-top: 300px;"><b> Members of the CBA Faculty </b></h5></center>

                        <div class="col-lg-6 col-md-6 col-sm-6"><center>
                        <img src="<?=base_url('/assets/for_main/img/conm/1.jpg');?>" class="img-thumbnail" style="max-height: 150px; max-width: 150px;" />
                        <h5><b> ARIEL DELOS REYES, RN, MAN </b></h5>
                        </div></center>

                        <div class="col-lg-6 col-md-6 col-sm-6"><center>
                        <img src="<?=base_url('/assets/for_main/img/conm/2.jpg');?>" class="img-thumbnail" style="max-height: 150px; max-width: 150px;" />
                        <h5><b> EMMY MACARAEG, RN, RM, MAN </b></h5>
                        </div></center>

                        <div class="col-lg-6 col-md-6 col-sm-6"><center>
                        <img src="<?=base_url('/assets/for_main/img/conm/3.jpg');?>" class="img-thumbnail" style="max-height: 150px; max-width: 150px;" />
                        <h5><b> FLORILYN A. SOL, RN, MAN </b></h5>
                        </div></center>

                        <div class="col-lg-6 col-md-6 col-sm-6"><center>
                        <img src="<?=base_url('/assets/for_main/img/conm/4.jpg');?>" class="img-thumbnail" style="max-height: 150px; max-width: 150px;" />
                        <h5><b> LAURO A. SANTOS, RN, MAN </b></h5>
                        </div></center>

                        <div class="col-lg-6 col-md-6 col-sm-6"><center>
                        <img src="<?=base_url('/assets/for_main/img/conm/5.jpg');?>" class="img-thumbnail" style="max-height: 150px; max-width: 150px;" />
                        <h5><b> LEONILA O. BAQUIANO, RN, MAEd </b></h5>
                        </div></center>

                        <div class="col-lg-6 col-md-6 col-sm-6"><center>
                        <img src="<?=base_url('/assets/for_main/img/conm/6.jpg');?>" class="img-thumbnail" style="max-height: 150px; max-width: 150px;" />
                        <h5><b> MARIA EPIFANIA THERESA S.J. TY, DMD, RN, MAEd</b></h5>
                        </div></center>

                        <div class="col-lg-6 col-md-6 col-sm-6"><center>
                        <img src="<?=base_url('/assets/for_main/img/conm/7.jpg');?>" class="img-thumbnail" style="max-height: 150px; max-width: 150px;" />
                        <h5><b> PAUL B. OBISPO, RN, MAN </b></h5>
                        </div></center>

                        <div class="col-lg-6 col-md-6 col-sm-6"><center>
                        <img src="<?=base_url('/assets/for_main/img/conm/8.jpg');?>" class="img-thumbnail" style="max-height: 150px; max-width: 150px;" />
                        <h5><b> ROWENA G. VERSOZA, RN, MSN </b></h5>
                        </div></center>

                        <div class="col-lg-6 col-md-6 col-sm-6"><center>
                        <img src="<?=base_url('/assets/for_main/img/conm/9.jpg');?>" class="img-thumbnail" style="max-height: 150px; max-width: 150px;" />
                        <h5><b> VIRGINIA PENALES, RN, MAN </b></h5>
                        </div></center>

                        <div class="col-lg-6 col-md-6 col-sm-6"><center>
                        <img src="<?=base_url('/assets/for_main/img/conm/10.jpg');?>" class="img-thumbnail" style="max-height: 150px; max-width: 150px;" />
                        <h5><b> WILMA T. VILLANUEVA, RN</b></h5>
                        </div></center>

                        <div class="col-lg-6 col-md-6 col-sm-6"><center>
                        <img src="<?=base_url('/assets/for_main/img/conm/11.jpg');?>" class="img-thumbnail" style="max-height: 150px; max-width: 150px;" />
                        <h5><b> MA. FELICIDAD MERCADO</b></h5>
                        </div></center>

                        <div class="col-lg-6 col-md-6 col-sm-6"><center>
                        <img src="<?=base_url('/assets/for_main/img/conm/11.jpg');?>" class="img-thumbnail" style="max-height: 150px; max-width: 150px;" />
                        <h5><b> RUTH ANNE RECILE, RN, MSN </b></h5>
                        </div></center>

                        <div class="col-lg-6 col-md-6 col-sm-6"><center>
                        <img src="<?=base_url('/assets/for_main/img/conm/12.jpg');?>" class="img-thumbnail" style="max-height: 150px; max-width: 150px;" />
                        <h5><b> RODERICK D. PADILLA, MD</b></h5>
                        </div></center>
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
