
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
            <h5>Upload Subject</h5>
          </div>
          <div class="widget-content nopadding">
            <?=form_open_multipart('dportal/subjects/submit/'.$this->uri->segment(4).'/'.$this->uri->segment(5),'class="form-horizontal" ')?>
               <?php if (isset($error)) : ?>
                   <div class="col-md-12">
                      <div class="alert alert-danger" role="alert">
                      <H5>ERROR:</H5>
                          <ul>
                              <li><?= $error?></li>
                          </ul>
                      </div>
                   </div>
               <?php endif; ?>
               <div class="control-group">
                <label class="control-label"><b>Excel File:</b></label>
                <div class="controls">
                   <input type="file" name="ang_file" class="form-control" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" name="Add Course"  value="Upload" class="btn btn-success"> 
                <a href="<?=site_url('/dportal/curriculum/').$this->uri->segment(4).'/'.$this->uri->segment(5)?>" class="btn btn-danger" onclick="confirm('Are you sure to Cancel?')">Cancel</a>
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





<script type="text/javascript">
  $(".dropdown-menu li a").click(function(){
  $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
  $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
});
</script>


