<!--sidebar-menu-->
<div id="sidebar">
  <ul>
    <li><a href="<?=site_url('/dportal');?>"><i class="icon icon-home"></i> <span>HOME</span></a> </li>
    <li class="active"><a href="<?=site_url('/dportal/course');?>"><i class="icon icon-th-list"></i> <span>Courses</span></a>
    <li data-toggle="collapse" data-target="#products" class="collapsed"><a href="#"><i class="icon icon-calendar"></i> <span>CLASS SCHEDULES</span></a></li>
    <ul class="sub-menu collapse" id="products" style="text-align: left; font-size: 13px;">
      <li><a href="<?=site_url('/addsubject');?>">Add Schedule</a></li>
      <li><a href="<?=site_url('/viewsched');?>">Manage Schedules</a></li>
    </ul>

    <li><a href="<?=site_url('/forum3');?>"><i class="icon icon-comments-alt"></i> <span>UNIVERSITY FORUM</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--Content-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=site_url('/dportal');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a >Curriculum</a> <a>Subject</a> <a href="#" class="current">Add</a> </div>
    <h1>Add Subject</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Subject Form</h5>
          </div>
          <div class="widget-content nopadding">
        
            <?=form_open('dportal/subjects/add/'.$this->uri->segment(4).'/'.$this->uri->segment(5),'class="form-horizontal" ')?>
              <?php if (validation_errors()) : ?>
                <div class="col-md-12">
                  <div class="alert alert-danger" role="alert">
                    <ul>
                    <li><?= validation_errors() ?></li>
                    </ul>
                  </div>
                </div>
              <?php endif; ?>
              <div class="form-actions">
                <input type="submit" name="Add Course" class="btn btn-success"> <a href="<?=site_url('/dportal/course')?>" class="btn btn-danger" onclick="confirm('Are you sure to Cancel?')">Cancel</a>

                  <input type="button" value="Add More Course/Subject" id="addButton">
                   <input type='button' value='Remove Button' id='removeButton'>
              </div>
              <div id="TextBoxesGroup">
              <div id="TextBoxDiv1">
                <div class="controls controls-row">
                  <input type="text" style="width:10rem; margin-left:-5rem;" class="span3 m-wrap" name="subject_id[]"   placeholder="Subject/Course Code" required="">
                  <input type="text" class="span4 m-wrap" id="description1" name="description[]" placeholder="Description" required="">
                  <input type="text" class="span2 m-wrap" id="units1" name="units[]" placeholder="No. of Units" required="">
                  <input type="text" class="span1 m-wrap" id="sem1" name="sem[]" placeholder="Sem." required="">
                  <input type="text" class="span1 m-wrap" id="year1" name="year[]" placeholder="Year" required="">
                  <input type="hidden" id="hide" name="count" value="1" required="">
                </div>
              </div>
              </div>
              <div class="form-actions">
                <input type="submit" name="Add Course" class="btn btn-success"> <a href="<?=site_url('/dportal/course')?>" class="btn btn-danger" onclick="confirm('Are you sure to Cancel?')">Cancel</a>

                  <input type="button" value="Add More Course/Subject" id="addButton">
                   <input type='button' value='Remove Button' id='removeButton'>
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








