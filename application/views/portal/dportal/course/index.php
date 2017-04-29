<!--sidebar-menu-->
<div id="sidebar">
  <ul>
    <li><a href="<?=site_url('/dportal');?>"><i class="icon icon-home"></i> <span>HOME</span></a> </li>
    <li class="active"><a href="<?=site_url('/dportal/course');?>"><i class="icon icon-th-list"></i> <span>Courses</span></a> </li>
    <li data-toggle="collapse" data-target="#products" class="collapsed"><a href="#"><i class="icon icon-calendar"></i> <span>CLASS SCHEDULES</span></a></li>
    <ul class="sub-menu collapse" id="products" style="text-align: left; font-size: 13px;">
      <li><a href="<?=site_url('/addsubject');?>">Add Schedule</a></li>
      <li><a href="<?=site_url('/viewsched');?>">Manage Schedules</a></li>
    </ul>

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
    <a title="" class="tip-bottom"> Courses</a>
    </div>
  </div>
<!--End-breadcrumbs-->

<!--Content-->
  <div class="container-fluid">
  <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5><B>Courses</B></h5>
          </div>
          <div class="widget-content nopadding">
<table>
<tbody>
<tr><td>
<div class="dropdown" style="padding-top: 15px; padding-left: 10px;">
  <a class="btn btn-success" href>Add Course</a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

  </ul>
</div>
</td></tr>
</tbody>
</table><br>

<table class="table table-bordered table-striped" style="font-size: 13px; table-layout: fixed; text-align: center;">
    <thead>
      <tr>
        <th>Courses</th>
        <th>Abbriviation</th>
        <th style="width: 5%;">Years</th>
        <th style="width: 15%;">Action</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($get_courses as $course): ?>
        <tr>
          <td  style="text-align: center;" ><?=$course['course_name']?></td>
          <td  style="text-align: center;"><?=$course['abbrv']?></td>
          <td  style="text-align: center;"><?=$course['years']?></td>
          <td  style="text-align: center;"><a href="<?=site_url('dportal/curriculums/').$course['course_id']?>" class="btn btn-primary">view curriculum</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
</table>

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

    






