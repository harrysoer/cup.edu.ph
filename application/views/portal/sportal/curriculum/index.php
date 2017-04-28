
<style type="text/css">
  
.panel{
  border-bottom: 3px solid #fdcd3d;
}

</style>

<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Student Portal</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a><i class="icon icon-user"></i>  <span class="text">User: Student</span></a>
    </li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar">
  <ul>
    <li><a href="<?=site_url('/sportal');?>"><i class="icon icon-home"></i> <span>HOME</span></a> </li>
    <li><a href="<?=site_url('/info');?>"><i class="icon icon-user"></i> <span>MY INFO</span></a> </li>
    <li><a href="<?=site_url('/grades');?>"><i class="icon icon-edit"></i> <span>MY GRADES</span></a> </li>
    <li><a href="<?=site_url('/schedules');?>"><i class="icon icon-calendar"></i> <span>MY SCHEDULES</span></a> </li>
    <li class="active"><a href="<?=site_url('/curriculum');?>"><i class="icon icon-list-alt"></i> <span>COURSE CURRICULUM</span></a> </li>
    <li><a href="<?=site_url('/forum2');?>"><i class="icon icon-comments-alt"></i> <span>UNIVERSITY FORUM</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
    <a href="<?=site_url('/sportal');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <a href="<?=site_url('/curriculum');?>" title="Go to Home" class="tip-bottom"><i class="icon-list-alt"></i> Course Curriculum</a>
    </div>
  </div>
<!--End-breadcrumbs-->

<!--Content-->
  <div class="container-fluid">
  <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-list-alt"></i> </span>
            <h5><B> B.S. IN OFFICE ADMINISTRATION</B></h5>
          </div><br>
<div class="widget-content nopadding">
        
        <p>Legend: <i class="icon-sign-blank" style="color: green"></i> = Pass | <i class="icon-sign-blank" style="color: red"></i> = Failed / Drop | <i class="icon-sign-blank" style="color: yellow"></i> = Incomplete</p><br>
          
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default" style="border-top: 3px solid #fdcd3d;">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <center><b>FIRST YEAR</b></center>
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">

          <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">FIRST SEMESTER</a></li>
              <li><a data-toggle="tab" href="#tab2">SECOND SEMESTER</a></li>
            </ul>
          </div>
          <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
<table class="table table-bordered table-striped" style="font-size: 13px; table-layout: fixed; text-align: center;">
<thead>
<tr>
  <th style="width: 20%;">SUBJECT CODE</th>
  <th style="width: 65%;">SUBJECT DESCRIPTION</th>
  <th style="width: 20%;">UNITS</th>
  
</tr>
</thead>
<tbody>
<tr class="success">
<td style="text-align: center;">Stn 405</td>
<td style="text-align: center;">Specialized Shorthand - Medical</td>
<td style="text-align: center;">3</td>
</tr>
<tr class="error">
<td style="text-align: center;">Law 303</td>
<td style="text-align: center;">Business Law & Taxation</td>
<td style="text-align: center;">3</td>
</tr>
<tr class="warning">
<td style="text-align: center;">CSC 209</td>
<td style="text-align: center;">Data Base</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">OAd 411</td>
<td style="text-align: center;">Events Management</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">CSC 217</td>
<td style="text-align: center;">Introduction to Internet & Basic Web Design</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">SOC 202</td>
<td style="text-align: center;">Society and Culture</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;"></td>
<td style="text-align: center;"></td>
<td style="text-align: center;">18</td>
</tr>
</tbody>
</table>
            </div>

            <div id="tab2" class="tab-pane">
<table class="table table-bordered table-striped" style="font-size: 13px; table-layout: fixed; text-align: center;">
<thead>
<tr>
  <th style="width: 20%;">SUBJECT CODE</th>
  <th style="width: 65%;">SUBJECT DESCRIPTION</th>
  <th style="width: 20%;">UNITS</th>
  
</tr>
</thead>
<tbody>
<tr class="success">
<td style="text-align: center;">Mgt 308</td>
<td style="text-align: center;">MIS</td>
<td style="text-align: center;">3</td>
</tr>
<tr class="error">
<td style="text-align: center;">Stn 406</td>
<td style="text-align: center;">Filipino Isteno</td>
<td style="text-align: center;">3</td>
</tr>
<tr class="warning">
<td style="text-align: center;">OAd 412</td>
<td style="text-align: center;">Principles of Public & Customer Relations</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">Riz 100</td>
<td style="text-align: center;">Life, Works & Writing Rizal</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">Psy 102</td>
<td style="text-align: center;">Business Psychology</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">OAd 413</td>
<td style="text-align: center;">Specialized Office Procedures - Medical</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;"></td>
<td style="text-align: center;"></td>
<td style="text-align: center;">18</td>
</tr>
</tbody>
</table>
            </div>
            
          </div>






                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading2">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2x`">
                    <center><b>SECOND YEAR</b></center>
                    </a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                <div class="panel-body">

                  <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">FIRST SEMESTER</a></li>
              <li><a data-toggle="tab" href="#tab2">SECOND SEMESTER</a></li>
            </ul>
          </div>
          <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
              <table class="table table-bordered table-striped" style="font-size: 13px; table-layout: fixed; text-align: center;">
<thead>
<tr>
  <th style="width: 20%;">SUBJECT CODE</th>
  <th style="width: 65%;">SUBJECT DESCRIPTION</th>
  <th style="width: 20%;">UNITS</th>
  
</tr>
</thead>
<tbody>
<tr class="success">
<td style="text-align: center;">Stn 405</td>
<td style="text-align: center;">Specialized Shorthand - Medical</td>
<td style="text-align: center;">3</td>
</tr>
<tr class="error">
<td style="text-align: center;">Law 303</td>
<td style="text-align: center;">Business Law & Taxation</td>
<td style="text-align: center;">3</td>
</tr>
<tr class="warning">
<td style="text-align: center;">CSC 209</td>
<td style="text-align: center;">Data Base</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">OAd 411</td>
<td style="text-align: center;">Events Management</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">CSC 217</td>
<td style="text-align: center;">Introduction to Internet & Basic Web Design</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">SOC 202</td>
<td style="text-align: center;">Society and Culture</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;"></td>
<td style="text-align: center;"></td>
<td style="text-align: center;">18</td>
</tr>
</tbody>
</table>
            </div>

            <div id="tab2" class="tab-pane">
<table class="table table-bordered table-striped" style="font-size: 13px; table-layout: fixed; text-align: center;">
<thead>
<tr>
  <th style="width: 20%;">SUBJECT CODE</th>
  <th style="width: 65%;">SUBJECT DESCRIPTION</th>
  <th style="width: 20%;">UNITS</th>
  
</tr>
</thead>
<tbody>
<tr class="success">
<td style="text-align: center;">Mgt 308</td>
<td style="text-align: center;">MIS</td>
<td style="text-align: center;">3</td>
</tr>
<tr class="error">
<td style="text-align: center;">Stn 406</td>
<td style="text-align: center;">Filipino Isteno</td>
<td style="text-align: center;">3</td>
</tr>
<tr class="warning">
<td style="text-align: center;">OAd 412</td>
<td style="text-align: center;">Principles of Public & Customer Relations</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">Riz 100</td>
<td style="text-align: center;">Life, Works & Writing Rizal</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">Psy 102</td>
<td style="text-align: center;">Business Psychology</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">OAd 413</td>
<td style="text-align: center;">Specialized Office Procedures - Medical</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;"></td>
<td style="text-align: center;"></td>
<td style="text-align: center;">18</td>
</tr>
</tbody>
</table>
            </div>
            
          </div>


                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading3">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                    <center><b>THIRD YEAR</b></center>
                    </a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                <div class="panel-body">

                  <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">FIRST SEMESTER</a></li>
              <li><a data-toggle="tab" href="#tab2">SECOND SEMESTER</a></li>
            </ul>
          </div>
          <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
              <table class="table table-bordered table-striped" style="font-size: 13px; table-layout: fixed; text-align: center;">
<thead>
<tr>
  <th style="width: 20%;">SUBJECT CODE</th>
  <th style="width: 65%;">SUBJECT DESCRIPTION</th>
  <th style="width: 20%;">UNITS</th>
  
</tr>
</thead>
<tbody>
<tr class="success">
<td style="text-align: center;">Stn 405</td>
<td style="text-align: center;">Specialized Shorthand - Medical</td>
<td style="text-align: center;">3</td>
</tr>
<tr class="error">
<td style="text-align: center;">Law 303</td>
<td style="text-align: center;">Business Law & Taxation</td>
<td style="text-align: center;">3</td>
</tr>
<tr class="warning">
<td style="text-align: center;">CSC 209</td>
<td style="text-align: center;">Data Base</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">OAd 411</td>
<td style="text-align: center;">Events Management</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">CSC 217</td>
<td style="text-align: center;">Introduction to Internet & Basic Web Design</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">SOC 202</td>
<td style="text-align: center;">Society and Culture</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;"></td>
<td style="text-align: center;"></td>
<td style="text-align: center;">18</td>
</tr>
</tbody>
</table>
            </div>

            <div id="tab2" class="tab-pane">
<table class="table table-bordered table-striped" style="font-size: 13px; table-layout: fixed; text-align: center;">
<thead>
<tr>
  <th style="width: 20%;">SUBJECT CODE</th>
  <th style="width: 65%;">SUBJECT DESCRIPTION</th>
  <th style="width: 20%;">UNITS</th>
  
</tr>
</thead>
<tbody>
<tr class="success">
<td style="text-align: center;">Mgt 308</td>
<td style="text-align: center;">MIS</td>
<td style="text-align: center;">3</td>
</tr>
<tr class="error">
<td style="text-align: center;">Stn 406</td>
<td style="text-align: center;">Filipino Isteno</td>
<td style="text-align: center;">3</td>
</tr>
<tr class="warning">
<td style="text-align: center;">OAd 412</td>
<td style="text-align: center;">Principles of Public & Customer Relations</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">Riz 100</td>
<td style="text-align: center;">Life, Works & Writing Rizal</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">Psy 102</td>
<td style="text-align: center;">Business Psychology</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">OAd 413</td>
<td style="text-align: center;">Specialized Office Procedures - Medical</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;"></td>
<td style="text-align: center;"></td>
<td style="text-align: center;">18</td>
</tr>
</tbody>
</table>
            </div>
            </div>

                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading4">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                    <center><b>FOURTH YEAR</b></center>
                    </a>
                </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                <div class="panel-body">

                  <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">FIRST SEMESTER</a></li>
              <li><a data-toggle="tab" href="#tab2">SECOND SEMESTER</a></li>
            </ul>
          </div>
          <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
              <table class="table table-bordered table-striped" style="font-size: 13px; table-layout: fixed; text-align: center;">
<thead>
<tr>
  <th style="width: 20%;">SUBJECT CODE</th>
  <th style="width: 65%;">SUBJECT DESCRIPTION</th>
  <th style="width: 20%;">UNITS</th>
  
</tr>
</thead>
<tbody>
<tr class="success">
<td style="text-align: center;">Stn 405</td>
<td style="text-align: center;">Specialized Shorthand - Medical</td>
<td style="text-align: center;">3</td>
</tr>
<tr class="error">
<td style="text-align: center;">Law 303</td>
<td style="text-align: center;">Business Law & Taxation</td>
<td style="text-align: center;">3</td>
</tr>
<tr class="warning">
<td style="text-align: center;">CSC 209</td>
<td style="text-align: center;">Data Base</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">OAd 411</td>
<td style="text-align: center;">Events Management</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">CSC 217</td>
<td style="text-align: center;">Introduction to Internet & Basic Web Design</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">SOC 202</td>
<td style="text-align: center;">Society and Culture</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;"></td>
<td style="text-align: center;"></td>
<td style="text-align: center;">18</td>
</tr>
</tbody>
</table>
            </div>

            <div id="tab2" class="tab-pane">
<table class="table table-bordered table-striped" style="font-size: 13px; table-layout: fixed; text-align: center;">
<thead>
<tr>
  <th style="width: 20%;">SUBJECT CODE</th>
  <th style="width: 65%;">SUBJECT DESCRIPTION</th>
  <th style="width: 20%;">UNITS</th>
  
</tr>
</thead>
<tbody>
<tr class="success">
<td style="text-align: center;">Mgt 308</td>
<td style="text-align: center;">MIS</td>
<td style="text-align: center;">3</td>
</tr>
<tr class="error">
<td style="text-align: center;">Stn 406</td>
<td style="text-align: center;">Filipino Isteno</td>
<td style="text-align: center;">3</td>
</tr>
<tr class="warning">
<td style="text-align: center;">OAd 412</td>
<td style="text-align: center;">Principles of Public & Customer Relations</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">Riz 100</td>
<td style="text-align: center;">Life, Works & Writing Rizal</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">Psy 102</td>
<td style="text-align: center;">Business Psychology</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;">OAd 413</td>
<td style="text-align: center;">Specialized Office Procedures - Medical</td>
<td style="text-align: center;">3</td>
</tr>
<tr>
<td style="text-align: center;"></td>
<td style="text-align: center;"></td>
<td style="text-align: center;">18</td>
</tr>
</tbody>
</table>
            </div>
            </div>

                </div>
            </div>
        </div>




</div>



      </div>
    </div>
  </div>
</div>
  <!--End of Content-->

</div>

    






