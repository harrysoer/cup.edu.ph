<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="images/favicon_1.ico">

    <title>Admin</title>

    <!-- Base Css Files -->
    <link href="<?=base_url('assets/for_admin/css/bootstrap.min.css')?>" rel="stylesheet" />

    <!-- Font Icons -->
    <link href="<?=base_url('assets/for_admin/assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" />
    <link href="<?=base_url('assets/for_admin/assets/ionicon/css/ionicons.min.css')?>" rel="stylesheet" />
    <link href="<?=base_url('assets/for_admin/css/material-design-iconic-font.min.css')?>" rel="stylesheet">

    <!-- animate css -->
    <link href="<?=base_url('assets/for_admin/css/animate.css')?>" rel="stylesheet" />

    <!-- Waves-effect -->
    <link href="<?=base_url('assets/for_admin/css/waves-effect.css')?>" rel="stylesheet">

    <!-- Dropzone css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/for_admin/assets/dropzone/dropzone.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/for_admin/assets/dropzone/basic.min.css') ?>">

    <!--bootstrap-wysihtml5-->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/for_admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css')?>" />
    <link href="<?=base_url('assets/for_admin/assets/summernote/summernote.css')?>" rel="stylesheet" />

    <!-- Plugin Css for datatable-->
    <link rel="stylesheet" href="<?=base_url('assets/for_admin/assets/magnific-popup/magnific-popup.css')?>" />
    <!-- <link rel="stylesheet" href="<?//=base_url('assets/jquery-datatables-editable/datatables.css')?>" />  -->
    <link href="<?php echo base_url('assets/for_admin/data-table/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">

    <!-- Custom Files -->
    <link href="<?=base_url('assets/for_admin/css/helper.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/for_admin/css/style.css')?>" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="<?=base_url('assets/for_admin/js/modernizr.min.js')?>"></script>
    
</head>
<body class="fixed-left">

<div class="wrapper-page">
    <div class="panel panel-color panel-primary panel-pages" style="margin-top:-5rem;">
        <div class="panel-heading bg-img"> 
            <div class="bg-overlay"></div>
            <center><img src="<?=base_url('/assets/for_main/img/logo1.png')?>" alt="logo"></center>
            <h3 class="text-center m-t-10 text-white"> Sign In to Admin </h3>
        </div> 


        <div class="panel-body">
        <?=form_open("login/status", 'class="form-horizontal m-t-20"');?>
<!-- 
        <div id="infoMessage"><?php echo $message;?></div>
 -->
        <?php if (isset($error)) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            </div>
        <?php endif; ?>

            <div class="form-group ">
                <div class="col-xs-12">
 
                    <input class="form-control input-lg " type="text" name="username" required="" placeholder="Username">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control input-lg" type="password" name="password" required="" placeholder="Password">
                </div>
            </div>
        <!--     <div class="form-group ">
                <div class="col-xs-12">
                    <div class="checkbox checkbox-success">
                        <input id="checkbox-signup" type="checkbox">
                        <label for="checkbox-signup">
                            Remember me
                        </label>
                    </div>
                    
                </div>
            </div> -->
            
            <div class="form-group text-center m-t-40">
                <div class="col-xs-12">
                    <button class="btn btn-success btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                </div>
            </div>

        </form> 
        </div>                                 
        
    </div>
</div>
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?=base_url('assets/for_admin/js/jquery.min.js')?>"></script>
        <script src="<?=base_url('assets/for_admin/js/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('assets/for_admin/js/waves.js')?>"></script>
        <script src="<?=base_url('assets/for_admin/js/wow.min.js')?>"></script>
        <script src="<?=base_url('assets/for_admin/js/jquery.nicescroll.js')?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/for_admin/js/jquery.scrollTo.min.js')?>"></script>
        <script src="<?=base_url('assets/for_admin/assets/jquery-detectmobile/detect.js')?>"></script>
        <script src="<?=base_url('assets/for_admin/assets/fastclick/fastclick.js')?>"></script>
        <script src="<?=base_url('assets/for_admin/assets/jquery-slimscroll/jquery.slimscroll.js')?>"></script>
        <script src="<?=base_url('assets/for_admin/assets/jquery-blockui/jquery.blockUI.js')?>"></script>


        <!-- CUSTOM JS -->
        <script src="<?=base_url('assets/for_admin/js/jquery.app.js')?>"></script>


    </body>
</html>
