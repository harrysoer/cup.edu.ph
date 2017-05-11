
     
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->                      
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <!-- <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Blank Page</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Moltran</a></li>
                            <li><a href="#">Pages</a></li>
                            <li class="active">Blank Page</li>
                        </ol>
                    </div>
                </div> -->


                <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-body"> 
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
            </div> <!-- End row -->

            </div> <!-- container -->
            <h2 style="padding-left: 3rem"><u>Comments</u></h2>
            <div class="container">

                <!-- Page-Title -->
                <!-- <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Blank Page</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Moltran</a></li>
                            <li><a href="#">Pages</a></li>
                            <li class="active">Blank Page</li>
                        </ol>
                    </div>
                </div> -->


                <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-body"> 
                          <?php foreach ($get_comments as $comments): ?>
                            <hr style="width: 75%; height: 5px; margin-left: 2rem; margin-right: auto; border-color: #666; border-style: inset;">
                        
                          <div class="single_blog_archive wow fadeInUp">
                              <div class="blog_commentbox" style="padding-top: 1rem; ">
                              <p style="font-weight: bold;"><i class="fa fa-person"></i>By:&nbsp;&nbsp;<?=$comments['author']?></p>
                              <p style="font-weight: bold;"><i class="fa fa-clock-o"></i>Time:&nbsp;&nbsp;<?=$comments['dates']?>,  <?=$comments['time']?></p>
                              <hr width="500" style="margin-top:10px;">
                              </div>
                            <p class="blog_summary" style="font-size: 15px; font-weight: bold; margin-left: 1rem;"><?=$comments['text']?></p>
                          </div>      
                          <?php endforeach ?>

                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">

                    
                    <div class="panel-heading"><h3 class="panel-title">Comment to this topic</h3></div>
                        <?php if (validation_errors()) : ?>
                          <div class="alert alert-danger" role="alert">
                            <ul>
                            <li><?= validation_errors() ?></li>
                            </ul>
                          </div>
                        <?php endif; ?>

                        <div class="panel-body"> 

                            <?=form_open('forum/post/'.$this->uri->segment(3))?>
                            
                                <textarea class="summernote" name="text" >Type here</textarea>
                                <input  class="btn btn-sm btn-primary" style="margin-top:1rem;"   type="submit" name="submit" value="Create news item" />
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
            </div> <!-- End row -->

            </div> <!-- container -->
                       
        </div> <!-- content -->

        

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
</div>
<!-- END wrapper --> 

