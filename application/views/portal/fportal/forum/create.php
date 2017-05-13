
<!--sidebar-menu-->
<div id="sidebar">
  <ul>
    <li><a href="<?=site_url('/fportal');?>"><i class="icon icon-home"></i> <span>HOME</span></a> </li>

    <li data-toggle="collapse" data-target="#options" class="collapsed "><a href="#"><i class="icon icon-calendar"></i> <span>MY CLASSES</span></a> 
    </li>
      <ul class="sub-menu collapse" id="options" style="text-align: left; font-size: 13px;">
      <li><a href="<?=site_url('/classes');?>">Manage Class Grades</a></li>
      <li><a href="<?=site_url('/viewclass');?>">View Class Schedules</a></li>
      </ul>
    
    <li class="active"><a href="<?=site_url('/forum4');?>"><i class="icon icon-comments-alt"></i> <span>UNIVERSITY FORUM</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->


<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb">
    <a href="<?=site_url('/dportal');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <a href="<?=site_url('/forum3');?>" title="Go to Home" class="tip-bottom"><i class="icon-comments-alt"></i> University Forum</a>
    </div>
    <h1>Create Topic</h1>
  </div>
<!--End-breadcrumbs-->
<!--Content-->

  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Curriculum Form</h5>
          </div>
          <div class="widget-content">
            <?=form_open('forum/create','class="form-horizontal" ')?>
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
                <label  style="margin-left: -5rem;" class="control-label"><b>Topic's Title:</b> </label>
                <div class="controls">
                  <input type="text" id="curriculum_name" class="span9 m-wrap" name="title" required="">
                </div>
              </div>
              <div class="widget-content">
                 <textarea name="text" class="textarea_editor span12" rows="6" placeholder="Enter text ..."></textarea>
              </div>
              <div class="form-actions">
                <input type="submit" name="submit" value="Create" class="btn btn-success"> <a href="<?=site_url('/forum')?>" class="btn btn-danger" onclick="return confirm('You haven\'t finished your post yet. Do you wish to leave without finishing?')">Cancel</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
  <!--End of Content-->

</div>

    






