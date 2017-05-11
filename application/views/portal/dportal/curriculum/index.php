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
    <a href="<?=site_url('/addsubject');?>" title="Go to Home" class="tip-bottom"> Curriculum</a>
    </div>
  </div>
<!--End-breadcrumbs-->

<!--Content-->
  <div class="container-fluid">
  <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5><B>Curriculum List</B></h5>
          </div>
          <div class="widget-content nopadding">
<table>
<tbody>
<tr><td>
<div class="dropdown" style="padding-top: 15px; padding-left: 10px;">
  <a class="btn btn-info" href="<?=site_url('dportal/course')?>"><i class=" icon-backward">&nbsp;&nbsp;</i>Return</a>
  <a class="btn btn-success" href="<?=site_url('dportal/curriculums/add/').$this->uri->segment(3)?>">Add Curriculum</a>
  
</div>
</td></tr>
</tbody>
</table><br>

<table class="table table-bordered table-striped" style="font-size: 13px; table-layout: fixed; text-align: center;">
    <thead>
      <tr>
        <th>Curriculum Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($get_curriculum as $curriculum): ?>
        <tr>
          <td style="text-align: center;"><?=$curriculum['curriculum_name']?></td>
          <td style="text-align: center;"><a href="<?=site_url('dportal/curriculum/').$this->uri->segment(3).'/'.$curriculum['curriculum_id']?>" class="btn btn-info">view curriculum</a></td>
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

    






