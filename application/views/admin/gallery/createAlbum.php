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
                    <h4 class="pull-left page-title">Add Album</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?=site_url('admin/gallery/albums/create')?>">Albums</a></li>
                        <li class="active">Create</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Add Album</h3></div>
                        <div class="panel-body"> 
                            <?=form_open('admin/gallery/albums/create')?>
                            <h4>Title</h4>
                            	<div class="col-sm-5">
                                	<input type="text" class="form-control" placeholder="Title" name="album_name" required autofocus>        
                                </div>
                                <div class="col-sm-9">
                                <input  class="btn btn-md btn-primary" style="margin-top:1rem;"   type="submit" name="submit" value="Create Album" />
                            	</div>
                            <?=form_close()?>
                        </div>
                    </div>
                </div>
            </div> <!-- End row -->

        </div> <!-- container -->
    
    </div> <!-- content -->

</div>