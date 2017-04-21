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
                <li class="dropdown active"><a href="<?=site_url('/about');?>">ABOUT US</a>
                  <ul class="dropdown-menu">
                  <li><a href="<?=site_url('/about');?>">Our History</a></li>
                  <li><a href="<?=site_url('/mvg');?>">Mission | Vision | Goals</a></li>
                  <li><a href="<?=site_url('/adm');?>">Administrators</a></li>
                  <li><a href="<?=site_url('/gallery');?>">Gallery</a></li>
                  <li><a href="<?=site_url('/hymn');?>">C.U.P. Hymn</a></li>
                  </ul>
                </li>
                <li><a href="<?=site_url('/admission');?>">ADMISSIONS</a></li>
                <li class="dropdown"><a href="<?=site_url('/academic');?>">ACADEMICS</a>
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
    <section id="imgBanner2">
      <h2>Gallery</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN GALLERY SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
        <!-- start course archive sidebar -->
        <div class="col-lg-4 col-md-4 col-sm-4">
         <div class="courseArchive_sidebar">
          <div class="single_sidebar">
                <ul class="news_tab">
                  <li class="active">
                    <div class="media">
                      <div class="media-body">
                       <a href="<?=site_url('/about');?>"><span class="glyphicon glyphicon-book fa-lg" style="padding-right: 13px;"></span>Our History</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-body">
                       <a href="<?=site_url('/mvg');?>"><span class="glyphicon glyphicon-globe fa-lg" style="padding-right: 13px;"></span>Mission | Vision | Goals</a>
                      </div>
                    </div>
                  </li>  
                  <li>
                    <div class="media">
                      <div class="media-body">
                       <a href="<?=site_url('/adm');?>"><span class="glyphicon glyphicon-user fa-lg" style="padding-right: 13px;"></span>Administrators</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-body">
                       <a href="<?=site_url('/gallery');?>" style="color: #fdcd3d;"><span class="glyphicon glyphicon-picture fa-lg" style="padding-right: 13px;"></span>Gallery</a>              
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-body">
                       <a href="<?=site_url('/hymn');?>"><span class="glyphicon glyphicon-music fa-lg" style="padding-right: 13px;"></span>C.U.P Hymn</a>
                      </div>
                    </div>
                  </li>  
                </ul>
              </div>
            </div>
            </div>
          
          <!-- End single sidebar -->


          <div class="col-lg-8 col-md-8 col-sm-8">
            <div id="gallerySLide" class="gallery_area">
              <?php foreach ($get_imgs as $images): ?>
                <?php if ($images->filen_name==false):
                  
                 ?>
                  
                <?php else: ?>
                  
                <a href="<?=base_url('uploads/gallery/').$images->file_name;?>" title="<?= $images->album_name;?>" style="width: 227px;">
                  <img class="gallery_img" src="<?=base_url('uploads/gallery/').$images->file_name?>" alt="img" />
                  <span class="view_btn">View</span>
                </a>
              <?php endif ?>
              <?php endforeach?>
            </div>
                <div class="col-lg-12 col-md-12 col-sm-12"><?=$pages?></div>  
          </div>
        </div>
      </div>
    </section>
    <!--=========== END GALLERY SECTION ================-->