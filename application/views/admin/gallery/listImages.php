<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Album Images:</h4>
                            </div>
                        </div>

                        <!-- SECTION FILTER
                        ================================================== -->  
                  <!--       <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <div class="portfolioFilter">
                                    <a href="#" data-filter="*" class="current">All</a>
                                    <a href="#" data-filter=".webdesign">Web Design</a>
                                    <a href="#" data-filter=".graphicdesign">Graphic Design</a>
                                    <a href="#" data-filter=".illustrator">Illustrator</a>
                                    <a href="#" data-filter=".photography">Photography</a>
                                </div>
                            </div>
                        </div> -->
                            <div class="row">
                               <div class="col-sm-6">
                                    <div class="m-b-30">
                                        <a href="<?=site_url('/admin/gallery/albums/list')?>"><button  class="btn btn-info waves-effect waves-light"><i class="fa fa-backward"></i>   Return </button></a>
                                    </div>
                                </div>
                            </div>
                        <div class="row port">
                            <div class="portfolioContainer">

                                <?php foreach ($get_images as $images): ?>
                                    <div class="col-sm-6 col-lg-3 col-md-4 webdesign illustrator">
                                        <div class="gal-detail thumb">
                                            <a href="<?=base_url('uploads/gallery/').$images['file_name']?> " class="image-popup" title="<?=$images['file_name']?>">
                                                <img src="<?=base_url('uploads/gallery/').$images['file_name']?> " class="thumb-img" alt="work-thumbnail">
                                            </a>
                                            <h4><?=$images['file_name']?></h4>
                                            <a   class="btn btn-danger btn-sm pull-right" style=" margin-top:-3.5rem;" href="<?=site_url('admin/gallery/view/').$images['slug'].'/'.$images['id']?>"  onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                                        </div>
                                    </div>
                                    <img src="">
                                <?php endforeach; ?>
                            </div>
                        </div> <!-- End row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
