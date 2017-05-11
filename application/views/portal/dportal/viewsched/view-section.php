
<!--sidebar-menu-->
<div id="sidebar">
  <ul>
    <li><a href="<?=site_url('/dportal');?>"><i class="icon icon-home"></i> <span>HOME</span></a> </li>
    <li class><a href="<?=site_url('/dportal/course');?>"><i class="icon icon-th-list"></i> <span>Courses</span></a> </li>
    <li data-toggle="collapse" data-target="#products" class="collapsed active"><a href="#"><i class="icon icon-calendar"></i> <span>CLASS SCHEDULES</span></a></li>
    <ul class="sub-menu collapse" id="products" style="text-align: left; font-size: 13px;">
      <li><a href="<?=site_url('/addsubject');?>">Add Schedule</a></li>
      <li><a href="<?=site_url('/viewsched');?>">Manage Schedules</a></li>
    </ul>
    <li class><a href="<?=site_url('/dportal/faculty');?>"><i class="icon icon-user-md"></i> <span>Faculty</span></a> </li>
    <li class><a href="<?=site_url('/dportal/students');?>"><i class="icon icon-user"></i> <span>Students</span></a> </li>
    <li><a href="<?=site_url('/forum3');?>"><i class="icon icon-comments-alt"></i> <span>UNIVERSITY FORUM</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
    <a href="<?=site_url('/dportal');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a>
    <a  class="tip-bottom"><i class="icon-calendar"></i> View Schedule</a>
    </div>
  </div>
<!--End-breadcrumbs-->

<!--Content-->
  <div class="container-fluid">
  <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5><B>View Schedule</B></h5>
          </div>
          <div class="widget-content nopadding">
<?=form_open('dportal/viewsections/'.$this->uri->segment(3))?>
<table>
<tbody>
<tr ><td style="padding-top: 25px; padding-left: 10px;" >
<!-- <div class="dropdown" >
  <button class="btn btn-default dropdown-toggle"  style="width:40rem;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Select Course:
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1"">
      <?//php foreach ($get_courses as $course): ?>
            <li><a href="#" name="course_name" value="<?//=$course['course_name']?>"><?//=$course['course_name']?></a></li>
    <?//php endforeach ?>
  </ul>

</div> -->
<select name="section_name" id="input" class="form-control" required="required" style="width: 40rem">
    <option>-----Select Section-----</option>
     <?php foreach ($get_section as $section): ?>
      <option value="<?=$section['section']?>"><?=$section['section']?></option>
    <?php endforeach ?>
</select>
</td>
<td style="padding-top: 15px; padding-left: 10px;"><button class="btn btn-success " style="width: 80px;">Next</button></td>
</tr>
</tbody>
</table>
</form>
<br>

<!-- <table class="table table-bordered table-striped" style="font-size: 13px; table-layout: fixed; text-align: center;">
<thead>
<tr>
  <th style="width: 10%;">SUBJECT CODE</th>
  <th style="width: 50%;">SUBJECT DESCRIPTION</th>
  <th style="width: 20%;">DAY/S</th>
  <th style="width: 20%;">TIME</th>
</tr>
</thead>

<tbody>
<tr>
<td style="text-align: center;">CSC 217</td>
<td style="text-align: center;">Introduction to Internet & Basic Web Design</td>
<td style="text-align: center;">Monday / Thursday</td>
<td style="text-align: center;">9:00 - 11:00</td>
</tr>
</tbody>
</table>
 -->
    </div><br>
   
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

    






