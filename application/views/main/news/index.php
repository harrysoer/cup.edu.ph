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
                <li class="active"><a href="<?=site_url();?>">HOME</a></li>
                <li><a href="<?=site_url('/about');?>">ABOUT US</a></li>
                <li><a href="<?=site_url('/admission');?>">ADMISSIONS</a></li>
                <li><a href="<?=site_url('/academic');?>">ACADEMICS</a></li>
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
      <h2>News</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog archive -->
                <?php foreach ($news as $news_item): ?>
                  <div class="col-lg-12 col-12 col-sm-12">
                    <div class="single_blog_archive wow fadeInUp">
                      <!-- <div class="blogimg_container">
                        <a href="#" class="blog_img">
                          <img alt="img" src="img/blog.jpg">
                        </a>
                      </div> -->
                      <h2 class="blog_title"><a href="<?=site_url('/news/').$news_item['slug']?>"><?=$news_item['title']?></a></h2>
                      <div class="blog_commentbox">
                        <p><i class="fa fa-calendar"></i>Date Published: <?=$news_item['dates']?></p>
                        <p><i class="fa fa-user"></i>Author: <?=$news_item['author']?></p>                      
                      </div>
                      <p class="blog_summary">
                      <?php 
                        $strip = strip_tags($news_item['text']);
                        $string = $strip;
                        if (strlen($string) > 300) {

                            // truncate string
                            $stringCut = substr($string, 0, 300);

                            // make sure it ends in a word so assassinate doesn't become ass...
                            $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
                        }
                        echo $string;
                      ?></p>
                      <a class="blog_readmore" href="<?=site_url('/news/').$news_item['slug']?>">Read More</a>
                    </div>
                  </div>
                <?php endforeach; ?>

                <!-- start single blog archive -->
              </div>
              <!-- end blog archive  -->
            </div>
          </div>
          <!-- End course content -->   
          <!-- start course archive sidebar -->
        </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->