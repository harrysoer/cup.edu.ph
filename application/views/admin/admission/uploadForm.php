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
                    <h4 class="pull-left page-title">Admission Page</h4>
                    <ol class="breadcrumb pull-right">
                        <li ><span style="color:#007399;">Admission</span></li>
                        <li><a href="<?=site_url('admin/admission/forms/list')?>">Forms</a></li>
                        <li class="active">Upload</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Upload Downloadable Form</h3></div>
                        <div class="panel-body"> 
                  
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
                            <?=form_open_multipart('admin/admission/forms/submit')?>
                                <div role="form" class="form-horizontal">
                                    <label><h4>File</h4></label>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="file" name="userFile" class="form-control" accept="application/pdf, .pdf" required>
                                        </div>
                                    </div>
                                    <label><h4>File Description</h4></label>
                                    <div class="form-group">
                                        <div class="col-sm-7">
                                            <input type="text" name="file_description" class="form-control" placeholder="File Description" required>  
                                        </div>
                                    </div>
                                </div>
                                <input class="btn btn-sm btn-primary" style="margin-top:1rem;" type="submit" name="submit" value="submit" />
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>