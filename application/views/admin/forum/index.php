
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
                          <ul class="quick-actions">
            <a href="<?=site_url('forum/create')?>" class="btn-lg btn-success"> 
             <span class="glyphicon glyphicon-pencil" ></span> Create A Topic
            </a>
                <?php foreach ($get_posts as $posts): ?>
<hr style="width: 100%; height: 5px; margin-left: auto; margin-right: auto; border-color: #666; border-style: inset;">
                  <div class="single_blog_archive wow fadeInUp">
                    <h2 class="blog_title"><a href="<?=site_url('/forum/post/').$posts['id_posts']?>"><?=$posts['title']?></a></h2>
                      <div class="blog_commentbox">
                        <p><i class="fa fa-clock-o"></i>Time:&nbsp;&nbsp;<?=$posts['time'].','.$posts['dates']?> </p>
                        <p><i class="fa fa-person"></i>By:&nbsp;&nbsp;<?=$posts['author']?> </p>                      
                      </div>
                        <p class="blog_summary">
                        <?php 
                                $strip = strip_tags( $posts['text']);
                                $string = $strip;
                                if (strlen($string) > 300) {
        
                                    // truncate string
                                    $stringCut = substr($string, 0, 300);
        
                                    // make sure it ends in a word so assassinate doesn't become ass...
                                    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
                                }
                                echo $string;
                              ?>
        
                        </p>
                        <a class="blog_readmore" href="<?=site_url('/forum/post/').$posts['id_posts']?>">Read More</a>
                  </div>
                <?php endforeach ?>
                        
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

