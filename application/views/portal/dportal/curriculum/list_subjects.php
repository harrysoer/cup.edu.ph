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
    <a title="Go to Home" class="tip-bottom"> Curriculum</a>
    </div>
  </div>
<!--End-breadcrumbs-->

<!--Content-->
  <div class="container-fluid">
  <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5><B>Curriculum Subject List </B></h5>
          </div>
          <div class="widget-content nopadding">
<table>
<tbody>
<tr><td>
<div class="dropdown" style="padding-top: 15px; padding-left: 10px;">
  <a class="btn btn-info" href="<?=site_url('dportal/curriculums/').$this->uri->segment(3)?>"><i class=" icon-backward">&nbsp;&nbsp;</i>Return</a>
  <a class="btn btn-success" href="<?=site_url('dportal/subjects/add/'.$this->uri->segment(3).'/'.$this->uri->segment(4))?>">Add Subjects</a>
  <a class="btn btn-danger" id="other" href="<?=site_url('dportal/courses/edit/'.$this->uri->segment(3).'/'.$this->uri->segment(4))?>">Other Actions</a>
</div>
</td></tr>
</tbody>
</table><br>

<table class="table table-bordered table-striped" style="font-size: 13px; table-layout: fixed; text-align: center;">
    
<!-- 1st year 1st sem -->
  <thead>
    <?php foreach ($get_year1_1 as $year1_1): ?>
      <tr>
        <th colspan="3"><?=$year1_1['year']?>st Year</th>
      </tr>
      <tr>
        <th colspan="3"><?=$year1_1['sem']?>st Sem</th>
      </tr>
      <?php  $year1_1_total = 0; break;?>
    <?php endforeach; ?>  
      <tr>
        <th>Course Code</th>
        <th>Description</th>
        <th>Units</th>
      </tr>
  </thead>
  <tbody>
    <?php foreach ($get_year1_1 as $year1_1): $year1_1_unit=+$year1_1['no_units']; ?>
      <?php   
          $year1_1_unit = $year1_1['no_units'];
          $year1_1_total += $year1_1_unit ;   
      ?>
      <tr>
        <td><?=$year1_1['subj_code']?></td>
        <td><?=$year1_1['description']?></td>
        <td><?=$year1_1_unit?></td>
      </tr> 
    <?php endforeach; ?>
    <?php foreach ($get_year1_2 as $year1_2): ?>
      <tr>
        <th colspan="2">TOTAL UNITS</th>
        <th><?=$year1_1_total?></th>
      </tr>
    <?php break; ?>
    <?php endforeach; ?>
  </tbody>
  
<!-- 2nd sem -->
  <thead>
    <?php foreach ($get_year1_2 as $year1_2): ?>
      <tr>
        <th colspan="3"><?=$year1_2['year']?>st Year</th>
      </tr>
      <tr>
        <th colspan="3"><?=$year1_2['sem']?>nd Sem</th>
      </tr>
      <tr>
        <th>Course Code</th>
        <th>Description</th>
        <th>Units</th>
      </tr>
      <?php  $year1_2_total = 0; break;?>
    <?php endforeach; ?>  
  </thead>
  <tbody>
    <?php foreach ($get_year1_2 as $year1_2): $year1_2_unit=+$year1_2['no_units']; ?>
      <?php   
          $year1_2_unit = $year1_2['no_units'];
          $year1_2_total += $year1_2_unit ;   
      ?>
      <tr>
        <td><?=$year1_2['subj_code']?></td>
        <td><?=$year1_2['description']?></td>
        <td><?=$year1_2_unit?></td>
      </tr> 
    <?php endforeach; ?>
    <?php foreach ($get_year1_2 as $year1_2): ?>
      <tr>
        <th colspan="2">TOTAL UNITS</th>
        <th><?=$year1_2_total?></th>
      </tr>
    <?php break; ?>
    <?php endforeach; ?>
  </tbody>


<!-- 2nd year 1st sem -->
  <thead>
    <?php foreach ($get_year2_1 as $year2_1): ?>
      <tr>
        <th colspan="3"><?=$year2_1['year']?>nd Year</th>
      </tr>
      <tr>
        <th colspan="3"><?=$year2_1['sem']?>st Sem</th>
      </tr>
      <?php  $year2_1_total = 0; break;?>
    <?php endforeach; ?>  
    <?php foreach ($get_year2_1 as $year2_1): ?>
      <tr>
        <th>Course Code</th>
        <th>Description</th>
        <th>Units</th>
      </tr>
    <?php break; ?>
    <?php endforeach; ?>
  </thead>
  <tbody>
    <?php foreach ($get_year2_1 as $year2_1): $year2_1_unit=+$year2_1['no_units']; ?>
      <?php   
          $year2_1_unit = $year2_1['no_units'];
          $year2_1_total += $year2_1_unit ;   
      ?>
      <tr>
        <td><?=$year2_1['subj_code']?></td>
        <td><?=$year2_1['description']?></td>
        <td><?=$year2_1_unit?></td>
      </tr> 
    <?php endforeach; ?>
  <?php foreach ($get_year2_1 as $year2_1): ?>
    <tr>
      <th colspan="2">TOTAL UNITS</th>
      <th><?=$year2_1_total?></th>
    </tr>
  <?php break; ?>
  <?php endforeach; ?>


  </tbody>
  
<!-- 2nd sem -->
  <thead>
    <?php foreach ($get_year2_2 as $year2_2): ?>
      <tr>
        <th colspan="3"><?=$year2_2['year']?>nd Year</th>
      </tr>
      <tr>
        <th colspan="3"><?=$year2_2['sem']?>nd Sem</th>
      </tr>
      <tr>
        <th>Course Code</th>
        <th>Description</th>
        <th>Units</th>
      </tr>
      <?php  $year2_2_total = 0; break;?>
    <?php endforeach; ?>  
  </thead>
  <tbody>
    <?php foreach ($get_year2_2 as $year2_2): $year2_2_unit=+$year2_2['no_units']; ?>
      <?php   
          $year2_2_unit = $year2_2['no_units'];
          $year2_2_total += $year2_2_unit ;   
      ?>
      <tr>
        <td><?=$year2_2['subj_code']?></td>
        <td><?=$year2_2['description']?></td>
        <td><?=$year2_2_unit?></td>
      </tr> 
    <?php endforeach; ?>
    <?php foreach ($get_year2_2 as $year2_2): ?>
      <tr>
        <th colspan="2">TOTAL UNITS</th>
        <th><?=$year2_2_total?></th>
      </tr>
    <?php break; ?>
    <?php endforeach; ?>
  </tbody>


<!-- 3rd year 1st sem -->
  <thead>
    <?php foreach ($get_year3_1 as $year3_1): ?>
      <tr>
        <th colspan="3"><?=$year3_1['year']?>rd Year</th>
      </tr>
      <tr>
        <th colspan="3"><?=$year3_1['sem']?>st Sem</th>
      </tr>
      <?php  $year3_1_total = 0; break;?>
    <?php endforeach; ?>  
    <?php foreach ($get_year3_1 as $year3_1): ?>
      <tr>
        <th>Course Code</th>
        <th>Description</th>
        <th>Units</th>
      </tr>
    <?php  break; ?>
    <?php endforeach; ?>
  </thead>
  <tbody>
    <?php foreach ($get_year3_1 as $year3_1): $year3_1_unit=+$year3_1['no_units']; ?>
      <?php   
          $year3_1_unit = $year3_1['no_units'];
          $year3_1_total += $year3_1_unit ;   
      ?>
      <tr>
        <td><?=$year3_1['subj_code']?></td>
        <td><?=$year3_1['description']?></td>
        <td><?=$year3_1_unit?></td>
      </tr> 
    <?php endforeach; ?>
    <?php foreach ($get_year3_1 as $year3_1): ?>
    <tr>
      <th colspan="2">TOTAL UNITS</th>
      <th><?=$year3_1_total?></th>
    </tr>
    <?php break; ?>
    <?php endforeach; ?>
  </tbody>
  
<!-- 2nd sem -->
  <thead>
    <?php foreach ($get_year3_2 as $year3_2): ?>
      <tr>
        <th colspan="3"><?=$year3_2['year']?>rd Year</th>
      </tr>
      <tr>
        <th colspan="3"><?=$year3_2['sem']?>nd Sem</th>
      </tr>
      <tr>
        <th>Course Code</th>
        <th>Description</th>
        <th>Units</th>
      </tr>
      <?php  $year3_2_total = 0; break;?>
    <?php endforeach; ?>  
  </thead>
  <tbody>
    <?php foreach ($get_year3_2 as $year3_2): $year3_2_unit=+$year3_2['no_units']; ?>
      <?php   
          $year3_2_unit = $year3_2['no_units'];
          $year3_2_total += $year3_2_unit ;   
      ?>
      <tr>
        <td><?=$year3_2['subj_code']?></td>
        <td><?=$year3_2['description']?></td>
        <td><?=$year3_2_unit?></td>
      </tr> 
    <?php endforeach; ?>
    <?php foreach ($get_year3_2 as $year3_2): ?>
      <tr>
        <th colspan="2">TOTAL UNITS</th>
        <th><?=$year3_2_total?></th>
      </tr>
    <?php break; ?>
    <?php endforeach; ?>
  </tbody>


<!-- 4th year 1st sem -->
  <thead>
    <?php foreach ($get_year4_1 as $year4_1): ?>
      <tr>
        <th colspan="3"><?=$year4_1['year']?>th Year</th>
      </tr>
      <tr>
        <th colspan="3"><?=$year4_1['sem']?>st Sem</th>
      </tr>
      <?php  $year4_1_total = 0; break;?>
    <?php endforeach; ?>  
    <?php foreach ($get_year4_1 as $year4_1): ?>
      <tr>
        <th>Course Code</th>
        <th>Description</th>
        <th>Units</th>
      </tr>
    <?php  break; ?>
    <?php endforeach; ?>
  </thead>
  <tbody>
    <?php foreach ($get_year4_1 as $year4_1): $year4_1_unit=+$year4_1['no_units']; ?>
      <?php   
          $year4_1_unit = $year4_1['no_units'];
          $year4_1_total += $year4_1_unit ;   
      ?>
      <tr>
        <td><?=$year4_1['subj_code']?></td>
        <td><?=$year4_1['description']?></td>
        <td><?=$year4_1_unit?></td>
      </tr> 
    <?php endforeach; ?>
    <?php foreach ($get_year4_1 as $year4_1): ?>
    <tr>
      <th colspan="2">TOTAL UNITS</th>
      <th><?=$year4_1_total?></th>
    </tr>
    <?php break; ?>
    <?php endforeach; ?>
  </tbody>
  
<!-- 2nd sem -->
  <thead>
    <?php foreach ($get_year4_2 as $year4_2): ?>
      <tr>
        <th colspan="3"><?=$year4_2['year']?>th Year</th>
      </tr>
      <tr>
        <th colspan="3"><?=$year4_2['sem']?>nd Sem</th>
      </tr>
      <tr>
        <th>Course Code</th>
        <th>Description</th>
        <th>Units</th>
      </tr>
      <?php  $year4_2_total = 0; break;?>
    <?php endforeach; ?>  
  </thead>
  <tbody>
    <?php foreach ($get_year4_2 as $year4_2): $year4_2_unit=+$year4_2['no_units']; ?>
      <?php   
          $year4_2_unit = $year4_2['no_units'];
          $year4_2_total += $year4_2_unit ;   
      ?>
      <tr>
        <td><?=$year4_2['subj_code']?></td>
        <td><?=$year4_2['description']?></td>
        <td><?=$year4_2_unit?></td>
      </tr> 
    <?php endforeach; ?>
    <?php foreach ($get_year4_2 as $year3_2): ?>
      <tr>
        <th colspan="2">TOTAL UNITS</th>
        <th><?=$year4_2_total?></th>
      </tr>
    <?php break; ?>
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



    






