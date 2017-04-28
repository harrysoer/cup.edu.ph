
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Student Portal</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a><i class="icon icon-user"></i>  <span class="text">User: Faculty</span></a>
    </li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar">
  <ul>
    <li><a href="<?=site_url('/fportal');?>"><i class="icon icon-home"></i> <span>HOME</span></a> </li>

    <li data-toggle="collapse" data-target="#options" class="collapsed active"><a href="#"><i class="icon icon-calendar"></i> <span>MY CLASSES</span></a> 
    </li>
      <ul class="sub-menu collapse" id="options" style="text-align: left; font-size: 13px;">
      <li><a href="<?=site_url('/classes');?>">Manage Class Grades</a></li>
      <li><a href="<?=site_url('/viewclass');?>">View Class Schedules</a></li>
      </ul>

    <li><a href="<?=site_url('/forum4');?>"><i class="icon icon-comments-alt"></i> <span>UNIVERSITY FORUM</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
    <a href="<?=site_url('/sportal');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <a href="<?=site_url('/schedules');?>" title="Go to Home" class="tip-bottom"><i class="icon-star"></i> My Class Grades</a>
    </div>
  </div>
<!--End-breadcrumbs-->

<!--Content-->
  <div class="container-fluid">
  <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5><B>CLASSES & GRADES</B></h5>
          </div>
          <div class="widget-content nopadding">
<table>
<tbody>
<tr>

<td>
<div class="dropdown" style="padding-top: 15px; padding-left: 10px;">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Select Course:
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#" data-value="B.S. in Office Administration">B.S. in Office Administration</a></li>
    <li><a href="#" data-value="Assc. in Computer Technology">Assc. in Computer Technology</a></li>
    <li><a href="#" data-value="B.S. in Public Governance">B.S. in Public Governance</a></li>
    <li><a href="#" data-value="Assc. in Hotel & Restaurant Management">Assc. in Hotel & Restaurant Management</a></li>
    <li><a href="#" data-value="B.S. in Business Administration">B.S. in Business Administration</a></li>
    <li><a href="#" data-value="B.S. in Elementary Education">B.S. in Elementary Education</a></li>
    <li><a href="#" data-value="B.S. in Secondary Education">B.S. in Secondary Education</a></li>
    <li><a href="#" data-value="B.S. in Nursing">B.S. in Nursing</a></li>
    <li><a href="#" data-value="Assc. in Midwifery">Assc. in Midwifery</a></li>
  </ul>
</div>
</td>

<td>
<div class="dropdown" style="padding-top: 15px; padding-left: 10px;">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Select Section:
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#" data-value="BSOA - 1A">BSOA - 1A</a></li>
    <li><a href="#" data-value="BSOA - 1B">BSOA - 1B</a></li>
  </ul>
</div>
</td>

<td>
<div class="dropdown" style="padding-top: 15px; padding-left: 10px;">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Select Subject Code:
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#" data-value="Stn 405">Stn 405</a></li>
    <li><a href="#" data-value="Law 303">Law 303</a></li>
    <li><a href="#" data-value="CSC 209">CSC 209</a></li>
    <li><a href="#" data-value="OAd 411">OAd 411</a></li>
    <li><a href="#" data-value="CSC 217">CSC 217</a></li>
    <li><a href="#" data-value="SOC 212">SOC 212</a></li>
  </ul>
</div>
</td>

</tr>
</tbody>
</table><br>

<div class="widget-title"> <span class="icon"> <i class="icon-group"></i> </span>
            <h5><B>BSOA - 1A</B></h5>
</div>
          <div class="widget-content nopadding">

<table class="table table-bordered table-striped" style="font-size: 13px; table-layout: fixed; text-align: center;">
<thead>
<tr>
  <th style="width: 15%;">STUDENT ID</th>
  <th style="width: 40%;">STUDENT NAME</th>
  <th style="width: 10%;">PRELIM</th>
  <th style="width: 10%;">MIDTERM</th>
  <th style="width: 10%;">FINALS</th>
  <th style="width: 15%;">REMARKS</th>
</tr>
</thead>

<tbody>

<tr>
<td style="text-align: center;">20140134</td>
<td style="text-align: center;">JOHN CEDRIC A. CASTILLO</td>
<td style="text-align: center;">1.25</td>
<td style="text-align: center;">1.50</td>
<td style="text-align: center;">1.25</td>
<td style="text-align: center;">PASSED</td>
</tr>

<tr>
<td style="text-align: center;">20130094</td>
<td style="text-align: center;">EUNICE ANNE J. PASCUA</td>
<td style="text-align: center;">1.25</td>
<td style="text-align: center;">1.25</td>
<td style="text-align: center;">1.25</td>
<td style="text-align: center;">PASSED</td>
</tr>

<tr>
<td style="text-align: center;">20130095</td>
<td style="text-align: center;">HARRY ANGELO L. SOER</td>
<td style="text-align: center;">2.00</td>
<td style="text-align: center;">1.50</td>
<td style="text-align: center;">1.50</td>
<td style="text-align: center;">PASSED</td>
</tr>

<tr>
<td style="text-align: center;">20130111</td>
<td style="text-align: center;">KUPOSKY MORRISS G. ESGUERRA</td>
<td style="text-align: center;">3.00</td>
<td style="text-align: center;">3.00</td>
<td style="text-align: center;">4.00</td>
<td style="text-align: center;">FAILED</td>
</tr>

<tr>
<td style="text-align: center;">20140171</td>
<td style="text-align: center;">JOHN CENA</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">-</td>
<td style="text-align: center;">DROPPED</td>
</tr>

</tbody>
</table>


</div><br>
    <button class="btn btn-danger pull-right" style="width: 80px; margin-left: 10px;">Cancel</button>&nbsp;&nbsp;
    <button class="btn btn-success pull-right" style="width: 80px;">Submit</button>

</div>
    
  </div>
  </div>
  </div>
  </div>
  <!--End of Content-->

  </div>

  <script type="text/javascript">
  $(".dropdown-menu li a").click(function(){
  $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
  $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
});
</script>

    






