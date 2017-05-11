
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->                      
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">


            <!-- CUSTOM JS -->
            <script src="<?=base_url('assets/for_admin/js/jquery.app.js')?>"></script>


            <script type="text/javascript" src="<?=base_url('assets/for_admin/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')?>"></script>
            <script type="text/javascript" src="<?=base_url('assets/for_admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')?>"></script>

            <!--form validation init-->
            <script src="<?=base_url('assets/for_admin/assets/summernote/summernote.min.js')?>"></script>

            <script>

                    $('.wysihtml5').wysihtml5();

                    $('.summernote').summernote({
                        height: 400,                 // set editor height

                        minHeight: 400,             // set minimum height of editor
                        maxHeight: null,             // set maximum height of editor

                        // focus: true,                 // set focus to editable area after initializing summernote
                        disableDragAndDrop: true            
                    });

            </script>

            
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">News</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?=site_url('admin/news/list')?>">News</a></li>
                        <li class="active">Create</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Add News</h3></div>
                        <div class="panel-body"> 
                            <?=form_open('admin/addNews')?>
                            <h4>Title</h4>
                                <input type="text" class="form-control" placeholder="Title" name="title" required autofocus>        
                                <br><h4>Author</h4>
                                <input type="text" class="form-control" placeholder="Author" name="author" required>        
                                <br>
                                <h4>Content</h4>
                                    <textarea class="summernote" name="content" >Type here</textarea>
                                <input  class="btn btn-sm btn-primary" style="margin-top:1rem;"   type="submit" name="submit" value="Create news item" />
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- End row -->
            
        </div> <!-- container -->
                   
    </div> <!-- content -->

   

</div>

        
    </body>
</html>
