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
                <li class="active"><a href="<?=site_url('/admission');?>">ADMISSIONS</a></li>
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
    <section id="imgBanner1">
      <h2>Admissions</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
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
                      <img src="<?=base_url('assets/for_main/img/add1.jpg');?>" />
                      <div class="mask">                         
                        <a href="course-single.html" class="course_more" data-toggle="modal" data-target="#modal1">View More</a>
                      </div>
                    </div>

                    <div class="singCourse_content">
                    <h3 class="singCourse_title">Admission Requirements</a></h3>
                    <p>Interested? Find out the things you need for your application here!</p>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                    <div class="modal fade" id="modal1">
                      <div class="modal-dialog">  
    
                        <div class="modal-content">
                          <div class="modal-header"  style="background-color: #003e00;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" style="color: white;">Admission Requirements<h4>
                          </div>
            
                            <div class="modal-body">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    New Students and Tranferees Requirements
                        <i class="more-less glyphicon glyphicon-plus" style="padding-left: 130px;"></i>
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                      <ol>
<li style="text-align: justify;">Result of the Entrance Examination from the Guidance Section;</li>
<li style="text-align: justify;">Original copy of Form 138 (High School Card) or PEPT Acceleration Certificate, ALS;</li>
<li style="text-align: justify;">Original copy of Letter of Recommendation and/or Certificate of Good Moral</li>
<li style="text-align: justify;">Moral Character from the Principal or Guidance Counselor;</li>
<li style="text-align: justify;">Certified True Copy of Birth Certificate (NSO);</li>
<li style="text-align: justify;">Barangay Certification (for Pasay Residents) that applicant is a bona fide resident of the Barangay;</li>
<li style="text-align: justify;">Voters ID card or Voters certification (for Pasay residents);</li>
<li style="text-align: justify;">Barangay Clearance (for non- Pasay Resident);</li>
<li style="text-align: justify;">Honorable Dismissal (for transferee);</li>
<li style="text-align: justify;">Five (5) copies 1 1/2 x 1 1/2 latest pictures;</li>
<li style="text-align: justify;">One (1) long brown envelope.</li>
<li style="text-align: justify;">Entrance Examination</li>
</ol>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading2">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                    Old Students
                        <i class="more-less glyphicon glyphicon-plus" style="padding-left: 368px;"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                <div class="panel-body">
                      <ol>
<li style="text-align: justify;">Report of Grades (Grade Assessment Record);</li>
<li style="text-align: justify;">Accomplished Clearance;</li>
<li style="text-align: justify;">University Student ID for semestral validation;</li>
<li style="text-align: justify;">Students who have failed in one or two subjects are required to re-enroll in the subjects to which they incurred a failing mark;</li>
<li style="text-align: justify;">Over loading of units is subject to the prior approval of the College Dean concerned and Registrar;</li>
</ol>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading3">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                    Second Course Applicants
                        <i class="more-less glyphicon glyphicon-plus" style="padding-left: 268px;"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                <div class="panel-body">
                      <ol>
<li style="text-align: justify;">Transcript of Records (TOR);</li>
<li style="text-align: justify;">Birth Certificate (N.S.O copy) for non-CUP graduate;</li>
</ol>
                </div>
            </div>
        </div>

</div>
                            </div>
            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                <!-- End of Modal -->
                <!-- End single course -->



                <!-- start single course -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_course wow fadeInUp">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/add2.png');?>" />
                      <div class="mask">                         
                        <a href="course-single.html" class="course_more" data-toggle="modal" data-target="#modal2">View More</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title">Enrollment Procedures</a></h3>
                    <p>Follow this easy steps in processing your application with us!</p>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                    <div class="modal fade" id="modal2">
                      <div class="modal-dialog">  
    
                        <div class="modal-content">
                          <div class="modal-header" style="background-color: #003e00;">
                            <button type="button" class="close" data-dismiss="modal" style="color: #fdcd3d;">&times;</button>
                            <h4 class="modal-title" style="color: white;">Enrollment Procedures<h4>
                          </div>
            
                            <div class="modal-body">
                                <ol>
<li style="text-align: justify;">A student is considered officially enrolled only after he has submitted all required credentials and paid the required Tuition Fee;</li><br>
<li style="text-align: justify;">No student shall be accepted in the class without the Certificate of Matriculation (COM) marked “ENROLLED” by the Registrar’s office;</li><br>
<li style="text-align: justify;">Change/s on class schedule/load should be done officially through the Change of Matriculation procedure prescribed by the Registrar.</li>
</ol>
                           </div>
                              
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                <!-- End of Modal -->
                <!-- End single course -->


                <!-- start single course -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_course wow fadeInUp">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/add3.jpg');?>" />
                      <div class="mask">                         
                        <a href="course-single.html" class="course_more" data-toggle="modal" data-target="#modal3">View More</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title">Scholarship Programs</a></h3>
                    <p>Want to have this awesome previleges? Here's how you apply.</p>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                    <div class="modal fade" id="modal3">
                      <div class="modal-dialog">  
    
                        <div class="modal-content">
                          <div class="modal-header" style="background-color: #003e00;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" style="color: white;">Scholarship Programs<h4>
                          </div>
            
                            <div class="modal-body">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading4">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                    Academic Scholars
                        <i class="more-less glyphicon glyphicon-plus" style="padding-left: 350px;"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                <div class="panel-body">
                      
<ol>
<li style="text-align: justify;">Incoming freshmen who graduated as Class Valedictorian or Class Salutatorian may apply as Entrance Scholars.</li>
<br><ul>
<li style="text-align: justify;">a.  Class Valedictorian - Full tuition fee exemption</li><br>
<li style="text-align: justify;">b.  Class Salutatorian - 50% tuition fee exemption</li>
</ul><br>
<li style="text-align: justify;">Regular students included in the Honor’s List / Deans’ List are qualified to be University Scholars.</li>
<br><ul>
<li style="text-align: justify;">a.  A student with a general weighted average of 1.25 with no grade lower than 1.5 in all subjects during the previous semester is eligible for a 100% tuition and miscellaneous fees exemption.</li><br>
<li style="text-align: justify;">b.  A student with a general weighted average of 1.5 with no grade lower that 1.75 in all subjects during the previous semester is eligible for a 100% tuition fees exemption.</li>
</ul></ol>

                      </ol>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading5">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
                    Non-Academic Scholars
                        <i class="more-less glyphicon glyphicon-plus" style="padding-left: 312px;"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                <div class="panel-body">
<ol>
<li style="text-align: justify;"><i><b>Leadership Scholar:</b></i> The elected President of the Central Student Council automatically becomes a Leadership Scholar and eligible for a 100% tuition exemption. He continuously enjoys this privilege in the succeeding semester provided that he incurs no failing grades.</li><br>
<li style="text-align: justify;"><i><b>President Scholarship:</b></i> TThe following students shall enjoy the CUP President Scholarship and eligible for 50% tuition exemption:</li><br>
<ul>
<li style="text-align: justify;">a.  Student representative to the University Disciplinary Board (During his term).</li><br>
<li style="text-align: justify;">b.  Students who wins any competition officially representing the CUP. (One academic year).</li>
</ul><br>
<li style="text-align: justify;"><i><b>Athletic / Cultural Scholarship:</b></i> Subject to the approval of the President, students who have been members of CUP sports or cultural teams for at least one (1) year are eligible for a 100% tuition fees exemption. They must have no grade lower than 2.5 in all subjects and obtained no failing and incomplete grades in all semesters.</li><br>
<li style="text-align: justify;"><i><b>Special Scholarship:</b></i> A student of CUP who has qualified with the criteria set by sponsoring individuals groups/agencies may apply for this scholarship.</li><br>
<li style="text-align: justify;"><i><b>Sen. Aquilino Pimentel, Sr. Scholarship:</b></i> Students who are currently serving as barangay officials may apply and enjoy 100% tuition fees exemption during the duration of their term, provided that they incur no failing grade.</li><br>
</ol>
                </div>
            </div>
        </div>

        

</div>
                            </div>
            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                <!-- End of Modal -->
                <!-- End single course -->


                <!-- start single course -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_course wow fadeInUp">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/add4.jpg');?>" />
                      <div class="mask">                         
                        <a href="course-single.html" class="course_more" data-toggle="modal" data-target="#modal4">View More</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title">Student Guidelines</a></h3>
                    <p>Here's a guide to help you when you're confused with our procedures.</p>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                    <div class="modal fade" id="modal4">
                      <div class="modal-dialog">  
    
                        <div class="modal-content">
                          <div class="modal-header" style="background-color: #003e00;">
                            <button type="button" class="close" data-dismiss="modal" style="color: #fdcd3d;">&times;</button>
                            <h4 class="modal-title" style="color: white;">Student Guidelines<h4>
                          </div>
            
                            <div class="modal-body">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading11">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
                    Adding, Changing, and Dropping of Subjects
                        <i class="more-less glyphicon glyphicon-plus" style="padding-left: 150px;"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                <div class="panel-body">
                  <ol>
<li style="text-align: justify;"> The Request for Adding/Dropping and Changing of subject should be coursed through only through the Office of the Registrar;</li>
<li style="text-align: justify;"> Accomplish the prescribed form from the Registrar’s Office in four (4) copies;</li>
<li style="text-align: justify;"> Request for such change should be strictly done only within the prescribed period;</li>
<li style="text-align: justify;"> The student should obtain the signatures of both former and/or latter instructors concerned, thence, the Dean of the College before endorsing the accomplished document to the Registrar;</li>
<li style="text-align: justify;"> A student who is officially enrolled but stopped attending class/es and has previously filed the prescribed/official form for dropping of subjects shall be marked Officially Dropped (O.D.) both by the instructor and the Registrar;</li>
<li style="text-align: justify;"> A student who is officially enrolled but did not attend scheduled class/es and did not file the prescribed dropping form shall be marked by the respective faculty and the Registrar as Unofficially Dropped (UD) with the corresponding failing grade of 5.0.</li>
</ol>
                </div>
            </div>
          </div>

           <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading12">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="true" aria-controls="collapse12">
                    Cross Enrollment
                        <i class="more-less glyphicon glyphicon-plus" style="padding-left: 359px;"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                <div class="panel-body">
                  <div>A student may be allowed to cross enroll to another school, provided that the following conditions are present:</div>
<div><br></div>
<ol>
<li>&nbsp;That the subject/s is/are not offered by the university at the time he needs them;</li>
<li>&nbsp;He/she must secure a Permit to Cross Enroll from the Registrar Office;</li>
<li>&nbsp;Obtain approval from the respective College Dean.</li>
</ol>
                  </div>
                </div>
            </div>

            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading17">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="true" aria-controls="collapse17">
                    Shifting to Another Course
                        <i class="more-less glyphicon glyphicon-plus" style="padding-left: 286px;"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
                <div class="panel-body">
                  <div>Procedure for shifting to another course shall be as follows: </div>
<div><br></div>
<ol>
<li>&nbsp;Secure the approval and acceptance by the new Dean duly noted by the former Dean;</li>
<li>&nbsp;Proceed with enrollment in the new college. </li>
</ol>
                  </div>
                </div>
            </div>

            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading13">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true" aria-controls="collapse13">
                    Applying for Lost COM
                        <i class="more-less glyphicon glyphicon-plus" style="padding-left: 315px;"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
                <div class="panel-body">
                  <div>In case of loss of COM which is necessary for transacting business with any of the university office, an authenticated copy of the lost COM may be issued upon request of the student and after payment of the required fees at the Cashier in consonance with the procedures herein enumerated below;</div>
<div><br></div>
<ol>
<li>&nbsp;Student must file a request letter for the issuance of an authenticated copy of COM before the Office of the Registrar;</li>
<li>&nbsp;Registrar will issue the prescribed form indicating therein the reason for the loss;</li>
<li>&nbsp;Student pays the required amount to the Cashier; </li>
<li>&nbsp;Cashier issues an Official Receipt of payment; </li>
<li>&nbsp;Student must present all the documents to the Dean; </li>
<li>&nbsp;The Dean provides the student an authenticated photocopy of the C.O.M. </li>
</ol>
                  </div>
                </div>
            </div>

            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading14">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="true" aria-controls="collapse14">
                    Examinations
                        <i class="more-less glyphicon glyphicon-plus" style="padding-left: 388px;"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
                <div class="panel-body">
                  <div>Three (3) periodic examinations are given every semester: – Prelim, Midterm and Final Examinations. The schedules for these examinations are announced through the Office of the Registrar. These examinations may be taken by students only on schedule and upon presentation of the Examination Permit.</div>
<div><br></div>
<ol>
<li>&nbsp;Examination Permit shall be issued only by the Cashier’s Office upon payment of balance or issuance of an approved Promissory Note by the President;</li>
<li>&nbsp;Student may secure Promissory Note from the Cashier's Office and to be noted by the Dean and approved by the President;</li>
<li>&nbsp;Students who have valid reasons for not being able to take the regular periodic examinations may apply for Special Examinations (See steps for Special Examinations). </li>
</ol>
                  </div>
                </div>
            </div>

            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading15">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
                    Filing a Promissory Note
                        <i class="more-less glyphicon glyphicon-plus" style="padding-left: 303px;"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
                <div class="panel-body">
<ol>
<li>&nbsp;Student must secure Promissory Note from the VPA;</li>
<li>&nbsp;Student must secure the signature and approval from the Dean and the President;</li>
<li>&nbsp;Student must attach the approved Promissory Note in the Certificate of Matriculation (C.O.M.) prior to assessment.</li>
<li>&nbsp;It is understood that the approval of the Promissory Note is discretionary upon the aforementioned officers.</li>
</ol>
                  </div>
                </div>
            </div>

            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading16">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true" aria-controls="collapse16">
                    Claiming of Graded Class Cards
                        <i class="more-less glyphicon glyphicon-plus" style="padding-left: 250px;"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
                <div class="panel-body">
<ol>
<li>&nbsp;Requirements: </li>
  <ul>
  <li>a.  Accomplished Clearance issued by the Registrar.</li>
  <li>b.  Certificate of Matriculation (C.O.M.)</li>
  <li>c.  Student ID</li>
  <li>d.  Mailing Envelope with stamp (mailing address must appear on the envelope), if student requests this mode of service of grades. </li>
  </ul>
<li>&nbsp;Procedures:</li>
  <ul>
<li>a.  Student secures an Accomplished Clearance from the Registrar; </li>
<li>b.  With an Accomplished Clearance, ID card, COM, mailing envelope with stamp in exceptional cases as mentioned above, the students must present it to the officer in charge at the Registrar to get the Graded Class cards. </li>
  </ul>
</ol>
                  </div>
                </div>
            </div>

            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading18">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="true" aria-controls="collapse18">
                    Leave of Absence (LOA)
                        <i class="more-less glyphicon glyphicon-plus" style="padding-left: 307px;"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
                <div class="panel-body">
<ol>
<li>&nbsp;A student may apply for a leave of absence in a period not exceeding two (2) semesters. </li>
<li>&nbsp;A student who files for Leave of Absence should seek permission and approval from the Department Head and Dean of the College concerned. </li>
<li>&nbsp;Any student who leaves the university without an approved LOA shall be denied re-admission unless he can present acceptable/ justifiable reason to be determined by the Dean of the College and duly approved by the Vice President for Academic Affairs. </li>
</ol>
                  </div>
                </div>
            </div>

            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading19">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse19" aria-expanded="true" aria-controls="collapse19">
                    Applying for Identification Card
                        <i class="more-less glyphicon glyphicon-plus" style="padding-left: 248px;"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19">
                <div class="panel-body">
<div>A new and transferee student must apply for his ID card immediately upon enrollment.</div>
<div>The general norm: No ID - No Entry policy shall be strictly implemented<br></div>
<div><br></div>
<ol>
<li>&nbsp; Procedure:</li>
<div><br></div>
<ul>
<li>a. &nbsp; Go to the Registrar’s Office and present the receipt of the payment for the ID and student’s copy of COM.</li>
<li>b. &nbsp; Accomplish the ID information form/slip issued by the Registrar’s Office.</li>
<li>c. &nbsp; Proceed to the room specified and have picture taken by the official photographer.</li>
<li>d. &nbsp;Get the ID card from the Dean’s Office on the date scheduled for release of such.</li>
</ul>
<div><br></div>
<li>&nbsp; In case of loss of ID Card, the student should:</li>
<div><br></div>
<ul>
<li>a. &nbsp; Write a letter to the Dean of his college informing him of the loss (when and how it was lost) and seek approval to apply for the new ID Card.</li>
<li>b. &nbsp; Proceed to OSA with the copy of the letter approved by College Dean for the issuance of a temporary ID by the latter.</li>
<li>c. &nbsp; Pay the cost of the ID card at the Cashier’s Office.</li>
<li>d. &nbsp; Follow the above procedure in applying for ID Card.Hello Summernote</li>
</ul></ol>
                  </div>
                </div>
            </div>
          
          </div>

                            </div>
            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                <!-- End of Modal -->
                <!-- End single course -->


                <!-- start single course -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_course wow fadeInUp">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/add5.jpg');?>" />                      
                      <div class="mask">                         
                        <a href="course-single.html" class="course_more" data-toggle="modal" data-target="#modal5">View More</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title">School Fees</a></h3>
                    <p>Want to know how much you spend? Check out the complete list &amp; computation of your matriculation!</p>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                    <div class="modal fade" id="modal5">
                      <div class="modal-dialog">  
    
                        <div class="modal-content">
                          <div class="modal-header" style="background-color: #003e00;">
                            <button type="button" class="close" data-dismiss="modal" style="color: #fdcd3d;">&times;</button>
                            <h4 class="modal-title" style="color: white;">School Fees<h4>
                          </div>
            
                            <div class="modal-body">
                              <ol>
                              <li style="text-align: justify;"><b>  Pasay Residents</b> - Php 100.00 / unit</li><br>
                              <li style="text-align: justify;"><b>  Non-Pasay Residents</b> - Php 300.00 / unit</li><br>
                              </ol> 
                              <p><b>  *NOTE:</b>  Miscellaneous fees and other expenses will be covered by the Pasay City Government</p>
                              
                            </div>
            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                <!-- End of Modal -->
                <!-- End single course -->

                <!-- start single course -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_course wow fadeInUp">
                    <div class="singCourse_imgarea">
                      <img src="<?=base_url('assets/for_main/img/add6.png');?>" />                      
                      <div class="mask">                         
                        <a href="course-single.html" class="course_more" data-toggle="modal" data-target="#modal6">View More</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title">Downloadable Files</a></h3>
                    <p>Here are some documents / forms to help you out for your admission with us.</p>
                  
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                    <div class="modal fade" id="modal6">
                      <div class="modal-dialog">  
    
                        <div class="modal-content">
                          <div class="modal-header" style="background-color: #003e00;">
                            <button type="button" class="close" data-dismiss="modal" style="color: #fdcd3d;">&times;</button>
                            <h4 class="modal-title" style="color: white;">Downloadable Files<h4>
                          </div>
            
                            <div class="modal-body">
                              <ol >
                              <?php foreach ($get_downloads as $downloads): ?>
                                <li style="text-align: justify;"><a href="<?=site_url('downloads/'). $downloads['file_name']?>"><span class="glyphicon glyphicon-file fa-lg"></span><?=$downloads['file_description']?> </a></li><br>
                              <?php endforeach ?>
                              </ol> 
                            </div>
            
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                <!-- End of Modal -->
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