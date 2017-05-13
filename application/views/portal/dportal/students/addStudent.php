
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
    <li class><a href="<?=site_url('/dportal/faculty');?>"><i class="icon icon-user-md"></i> <span>Faculty</span></a> </li>
    <li class="active"><a href="<?=site_url('/dportal/students');?>"><i class="icon icon-user"></i> <span>Students</span></a> </li>
    <li><a href="<?=site_url('/forum3');?>"><i class="icon icon-comments-alt"></i> <span>UNIVERSITY FORUM</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=site_url('/dportal');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Add</a> </div>
    <h1>Add Student Account</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Register Student Form</h5>
          </div>
          <div class="widget-content nopadding">
            <?=form_open('','class="form-horizontal" ')?>
              <?php if (validation_errors()) : ?>
                <div class="col-md-12">
                  <div class="alert alert-danger" role="alert">
                    <ul>
                    <li><?= validation_errors() ?></li>
                    </ul>
                  </div>
                </div>
              <?php endif; ?>
              <div class="control-group">
                <label class="control-label" for="id">Student ID number</label>
                <div class="controls">
                  <input type="number" id="id" name="id" required="" class="span4 m-wrap">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="first_name">First Name</label>
                <div class="controls">
                  <input type="text" id="first_name" name="first_name" required="" class="span4 m-wrap">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="mi">Middle Initial</label>
                <div class="controls">
                  <input type="text"  id="mi" name="mi" required="" class="span4 m-wrap">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="last_name">Last Name</label>
                <div class="controls">
                  <input type="text"  id="last_name" name="last_name" required="" class="span4 m-wrap">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="last_name">Course</label>
                <div class="controls">
                  <select name="course" id="input" class="form-control" required="required" style="width: 40rem">
                      <option>-----Select Course-----</option>
                       <?php foreach ($get_courses as $course): ?>
                        <option value="<?=$course['course_id']?>"><?=$course['course_name']?></option>
                      <?php endforeach ?>
                  </select>
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Next" class="btn btn-success"> <a href="<?=site_url('dportal/students')?>" class="btn btn-danger" onclick="return confirm('Are you sure to Cancel?')">Cancel</a>
              </div>
              <bs3form
            </form>
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

    
