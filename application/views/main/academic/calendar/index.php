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
                       <a href="<?=site_url('/conm');?>">College of Nursing and Midwifery</a>
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
                       <a href="<?=site_url('/calendar');?>" style="color: #fdcd3d;">Academic Calendar</a>
                      </div>
                    </div>
                  </li> 
                </ul>
              </div>
            </div>
              <!-- End single sidebar -->

              <!-- End course content -->
        <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog -->
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog">
                    <h2 class="blog_title"><center>ACADEMIC CALENDAR (S.Y. 2016 - 2017)</center></h2>
                    <br>



    
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h3 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <center><b>SUMMER 2016</b></center>
                    </a>
                </h3>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
<table class="table table-bordered">
<tbody>
<tr>
<td><span style="font-weight: bold;">2016</span></td>
<td><br></td>
</tr>
<tr>
<td>MAY 01</td>
<td>LABOR DAY</td>
</tr>
<tr>
<td>MAY 23 - 25</td>
<td>ENROLLMENT OF FOURTH YEAR STUDENTS FOR FIRST SEMESTER</td>
</tr>
<tr>
<td>MAY 26 - 30</td>
<td>ENROLLMENT OF THIRD YEAR STUDENTS FOR FIRST SEMESTER<br></td>
</tr>
<tr>
<td>MAY 31 - JUNE 03</td>
<td>ENROLLMENT OF SECOND YEAR STUDENTS FOR FIRST SEMESTER<br></td>
</tr>
<tr>
<td>JUNE 06 - 17</td>
<td>ENROLLMENT OF FRESHMEN AND TRANSFEREES FOR FIRST SEMESTER<br></td>
</tr>
<tr>
<td>JUNE 12</td>
<td>INDEPENDENCE DAY</td>
</tr>
</tbody>
</table>                       
                </div>
            </div>
        </div><BR>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading2">
                <h3 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                    <center><b>FIRST SEMESTER</b></center>
                    </a>
                </h3>
            </div>
            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                <div class="panel-body">
<table class="table table-bordered">
<tbody>
<tr>
<td><span style="font-weight: bold;">2016</span></td>
<td><br></td>
</tr>
<tr>
<td>JUNE 13</td>
<td>START OF CLASSES - FIRST SEMESTER</td>
</tr>
<tr>
<td>JULY 28 - AUGUST 01</td>
<td>PRELIM EXAMINATION</td>
</tr>
<tr>
<td>AUGUST 21</td>
<td>NINOY AQUINO DAY</td>
</tr>
<tr>
<td>AUGUST 28</td>
<td>NATIONAL HEROES DAY</td>
</tr>
<tr>
<td>SEPTEMBER 01 - 04</td>
<td>MIDTERM EXAMINATION</td>
</tr>
<tr>
<td>OCTOBER 27 - 30</td>
<td>FINAL EXAMINATION</td>
</tr>
<tr>
<td>OCTOBER 30</td>
<td>END OF CLASSES - FIRST SEMESTER</td>
</tr>
<tr>
<td>OCTOBER 31</td>
<td>START OF SEMESTRAL BREAK</td>
</tr>
<tr>
<td>NOVEMBER 03 - 04</td>
<td>ENROLLMENT OF NEW AND TRANSFEREE STUDENTS FOR SECOND SEMESTER</td>
</tr>
<tr>
<td>NOVEMBER 06</td>
<td>ACADEMIC DELIBERATION FOR FIRST SEMESTER</td>
</tr>
<tr>
<td>NOVEMBER 07 - 09</td>
<td>ENROLLMENT OF OLD REGULAR/IRREGULAR FIRST YEAR STUDENTS FOR SECOND SEMESTER</td>
</tr>
<tr>
<td>NOVEMBER 09</td>
<td>SUBMISSION OF GRADES FOR FIRST SEMESTER</td>
</tr>
<tr>
<td>NOVEMBER 10 - 11</td>
<td>ENROLLMENT OF OLD REGULAR/IRREGULAR SECOND YEAR STUDENTS FOR SECOND SEMESTER</td>
</tr>
<tr>
<td>NOVEMBER 14 - 15</td>
<td>ENROLLMENT OF OLD REGULAR/IRREGULAR THIRD YEAR STUDENTS FOR SECOND SEMESTER</td>
</tr>
<tr>
<td>NOVEMBER 16 - 18</td>
<td>ENROLLMENT OF OLD REGULAR/IRREGULAR FOURTH YEAR STUDENTS FOR SECOND SEMESTER</td>
</tr>
</tbody>
</table>                       
                </div>
            </div>
        </div><BR>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading3">
                <h3 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                    <center><b>SECOND SEMESTER</b></center>
                    </a>
                </h3>
            </div>
            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                <div class="panel-body">
<table class="table table-bordered">
<tbody>
<tr>
<td><span style="font-weight: bold;">2016</span></td>
<td><br></td>
</tr>
<tr>
<td>NOVEMBER 21</td>
<td>START OF CLASSES - SECOND SEMESTER</td>
</tr>
<tr>
<td>NOVEMBER 30</td>
<td>BONIFACIO DAY</td>
</tr>
<tr>
<td>DECEMBER 15 - 16</td>
<td>PRELIM EXAMINATION<br></td>
</tr>
<tr>
<td>DECEMBER 19 - 21</td>
<td>COLLEGE WEEK<br></td>
</tr>
<tr>
<td>DECEMBER 22</td>
<td>START OF CHRISTMAS VACATION<br></td>
</tr>
<tr>
<td>DECEMBER 25</td>
<td>CHRISTMAS DAY</td>
</tr>
<tr>
<td>DECEMBER 30</td>
<td>RIZAL DAY</td>
</tr>
<tr>
<td>DECEMBER 31</td>
<td>NEW YEAR'S EVE</td>
</tr>
<tr>
<td><span style="font-weight: bold;">2017</span></td>
<td><br></td>
</tr>
<tr>
<td>JANUARY 3</td>
<td>END OF CHRISTMAS VACATION</td>
</tr>
<tr>
<td>JANUARY 4</td>
<td>RESUME OF CLASSES - SECOND SEMESTER</td>
</tr>
<tr>
<td>FEBRUARY 2 - 5</td>
<td>MIDTERM EXAMINATION FOR GRADUATING STUDENTS</td>
</tr>
<tr>
<td>FEBRUARY 16 - 19</td>
<td>MIDTERM EXAMINATION FOR NON-GRADUATING STUDENTS</td>
</tr>
<tr>
<td>FEBRUARY 25</td>
<td>PEOPLE POWER ANNIVERSARY</td>
</tr>
<tr>
<td>MARCH 9 - 12</td>
<td>FINAL EXAMINATION FOR GRADUATING STUDENTS</td>
</tr>
<tr>
<td>MARCH 19</td>
<td>ACADEMIC DELIBERATION FOR GRADUATING STUDENTS</td>
</tr>
<tr>
<td>MARCH 22</td>
<td>SUBMISSION OF GRADES FOR GRADUATING STUDENTS</td>
</tr>
<tr>
<td>APRIL 6 - 9</td>
<td>FINAL EXAMINATION FOR NON-GRADUATING STUDENTS</td>
</tr>
<td>APRIL 11</td>
<td>END OF CLASSES - SECOND SEMESTER</td>
</tr>
<tr>
<td>APRIL 13</td>
<td>MAUNDY THURSDAY</td>
</tr>
<tr>
<td>APRIL 14</td>
<td>GOOD FRIDAY</td>
</tr>
<tr>
<td>APRIL 16</td>
<td>ACADEMIC DELIBERATION FOR NON-GRADUATING STUDENTS</td>
</tr>
<td>APRIL 19</td>
<td>SUBMISSION OF GRADES FOR NON-GRADUATING STUDENTS</td>
</tr>
<td>APRIL 21</td>
<td>GRADUATION DAY</td>
</tr>
</tbody>
</table>                  
                </div>
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