<!--sidebar-menu-->
<div id="sidebar">
  <ul>
    <li><a href="<?=site_url('/dportal');?>"><i class="icon icon-home"></i> <span>HOME</span></a> </li>
    <li><a href="<?=site_url('/dportal/course');?>"><i class="icon icon-th-list"></i> <span>Courses</span></a> </li>

    <li data-toggle="collapse" data-target="#products" class="collapsed active"><a href="#"><i class="icon icon-calendar"></i> <span>CLASS SCHEDULES</span></a></li>
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
    <a href="<?=site_url('/sportal');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a>
    <a href="<?=site_url('/addsubject');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Manage Schedules</a>
    </div>
  </div>
<!--End-breadcrumbs-->

<!--Content-->
  <div class="container-fluid">
  <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-content nopadding">

<div class="widget-title"> <span class="icon"> <i class="icon-group"></i> </span>
            <h5><B>Section <?php foreach ($get_schedules as $schedules): ?>
              <?=$schedules['section']?>
            <?php break; endforeach ?></B></h5>
</div>
          <div class="widget-content nopadding">

<table class="table table-bordered table-striped" style="font-size: 13px; table-layout: fixed; text-align: center;">
<thead>
<tr>
  <th style="width: 10%;">SUBJECT CODE</th>
  <th style="width: 40%;">SUBJECT DESCRIPTION</th>
  <th style="width: 15%;">DAY/S</th>
  <th style="width: 15%;">TIME</th>
  <th style="width: 20%;">ACTION</th>
</tr>
</thead>

<tbody>
<?php foreach ($get_schedules as $schedules): ?>
  
<tr>
<td style="text-align: center;"><?=$schedules['subject_code']?></td>
<td style="text-align: center;"><?=$schedules['description']?></td>
<td style="text-align: center;"><?=$schedules['days']?></td>
<td style="text-align: center;"><?=$schedules['time']?></td>
<td style="text-align: center;">
    <button class="btn btn-success btn-mini" style="width: 80px;">Change</button>
    <button class="btn btn-danger btn-mini" style="width: 80px;">Delete</button>
</td>
</tr>
<?php endforeach ?>
</tbody>
</table>

</div>

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

    






