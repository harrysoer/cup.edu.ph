
<!--sidebar-menu-->
<div id="sidebar">
  <ul>
    <li><a href="<?=site_url('/dportal');?>"><i class="icon icon-home"></i> <span>HOME</span></a> </li>
    <li ><a href="<?=site_url('/dportal/course');?>"><i class="icon icon-th-list"></i> <span>Courses</span></a> </li>
    <li data-toggle="collapse" data-target="#products" class="collapsed"><a href="#"><i class="icon icon-calendar"></i> <span>CLASS SCHEDULES</span></a></li>
    <ul class="sub-menu collapse" id="products" style="text-align: left; font-size: 13px;">
      <li><a href="<?=site_url('/addsubject');?>">Add Schedule</a></li>
      <li><a href="<?=site_url('/viewsched');?>">Manage Schedules</a></li>
    </ul>
    <li class="active"><a href="<?=site_url('/dportal/faculty');?>"><i class="icon icon-user-md"></i> <span>Faculty</span></a> </li>
    <li class><a href="<?=site_url('/dportal/students');?>"><i class="icon icon-user"></i> <span>Students</span></a> </li>
    <li><a href="<?=site_url('/forum3');?>"><i class="icon icon-comments-alt"></i> <span>UNIVERSITY FORUM</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=site_url('/dportal');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Courses</a> <a href="#" class="current">Add</a> </div>
    <h1>Information</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5> Faculty Information</h5>
          </div>
          <div class="widget-content nopadding">
            <?=form_open('','class="form-horizontal" ')?>
              <div class="control-group">
              <?php foreach ($get_info as $info):?>
                <?php
                  $string = $info['username'];
                  preg_match_all('!\d!', $string, $matches);
                  $id = (int)implode('',$matches[0]);
                ?>
                <label class="control-label" for="id">Employee ID number:</label>
                <div class="controls">
                  <input type="text" id="id" name="id" required="" class="span4 m-wrap" value="<?=$id?>" readonly=""  disabled="">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="first_name">Name:</label>
                <div class="controls">
                  <input type="text" id="first_name" name="first_name" required="" class="span4 m-wrap" readonly="" value="<?=$info['last_name'].', '.$info['first_name']?>" disabled="" >
                </div>
              </div>
              <?php endforeach ?>
              <div class="form-actions">
              <a href="<?=site_url('dportal/faculty')?>" class="btn btn-info" onclick="return confirm('Are you sure to Cancel?')">Return</a>
                <a name="Add Course" href="<?=site_url('dportal/assign/select-course/'.$this->uri->segment(4))?>" class="btn btn-success">Assign schedule</a> 
              </div>
            </form>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead><tr>
                <th>Section</th>                
                <th>Subject Code</th>                
                <th>Subject Description</th>                
                <th>Days</th>                
                <th>Time</th>                
              </tr></thead>
              <tbody>
                <?php foreach ($get_schedules as $sched): ?>
                  <tr>  
                    <td><?=$sched['']?></td>
                    <td><?=$sched['']?></td>
                    <td><?=$sched['']?></td>
                    <td><?=$sched['']?></td>
                    <td><?=$sched['']?></td>
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
</div>

<script type="text/javascript">
  $(".dropdown-menu li a").click(function(){
  $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
  $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
});
</script>

    
