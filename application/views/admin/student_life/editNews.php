
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
                    <h4 class="pull-left page-title">News</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?=site_url('admin/news/list')?>">News</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Edit News</h3></div>
                        <div class="panel-body"> 
                            <?=form_open('admin/news/edit/'.$news_item['id'])?>
                            <h4>Title</h4>
                                <input type="text" class="form-control" value="<?=$news_item['title']?>" placeholder="Title" name="title" required>        
                                <br><h4>Author</h4>
                                <input type="text" class="form-control" value="<?=$news_item['author']?>" placeholder="Author" name="author" required>        
                                <br>
                                <h4>Content</h4>
                                    <textarea class="summernote" name="content"><?=$news_item['text'] ?></textarea>
                                <input class="btn btn-sm btn-primary" style="margin-top:1rem;" type="submit" name="submit" value="Update" />
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- End row -->
            
        </div> <!-- container -->
                   
    </div> <!-- content -->

    <footer class="footer text-right">
        2015 © Moltran.
    </footer>

</div>
