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
  </div>
<!--End-breadcrumbs-->
<!--Content-->

  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-content">
          <h1 ><b><?=$get_post['title']?></b></h1>
          <p><b>Posted By:</b>&nbsp;&nbsp;<?=$get_post['author']?>
          <b style="padding-right:1rem;padding-left:1rem;">|</b>
          <b>DATE:</b> &nbsp;<?=$get_post['time']?>&nbsp; ,<?=$get_post['dates']?></p>
          <hr>
          <!-- content -->
           <div style="font-size:15px;"><?=$get_post['text']?></div>
          </div>
        </div>
      </div>
    </div>
    <div id="content-header">
      <h1>Comment(s)</h1>
      <hr>
    </div>
      <?php foreach ($get_comments as $comments): ?>
      <div class="single_blog_archive wow fadeInUp">
          <div class="blog_commentbox" style="padding-top: 1rem; ">
          <p style="font-weight: bold;"><i class="fa fa-person"></i>By:&nbsp;&nbsp;<?=$comments['author']?></p>
          <p style="font-weight: bold;"><i class="fa fa-clock-o"></i>Time:&nbsp;&nbsp;<?=$comments['dates']?>,  <?=$comments['time']?></p>
          <hr width="500" style="margin-top:10px;">
          </div>
        <p class="blog_summary" style="font-size: 15px; font-weight: bold; margin-left: 1rem;"><?=$comments['text']?></p>
      </div>      
      <?php endforeach ?>
      <?=form_open('forum/post/'.$this->uri->segment(3),'class="form-horizontal" ')?>
          <?php if (validation_errors()) : ?>
            <div class="col-md-12">
              <div class="alert alert-danger" role="alert">
                <ul>
                <li><?= validation_errors() ?></li>
                </ul>
              </div>
            </div>
          <?php endif; ?>
      <div class="widget-content">
         <textarea name="text" class="textarea_editor span12" rows="6" placeholder="Enter text ..."></textarea>
      <div class="form-actions">
        <input type="submit" name="submit" value="Comment" class="btn btn-success"></div>
      </div>
        </form>
    </div>
  </div>
</div>
  <!--End of Content-->

</div>

    






