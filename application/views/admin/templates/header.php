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

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="<?=site_url('admin/')?>" class="logo"><i class="md md-terrain"></i> <span>Admin Panel</span></a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <button class="button-menu-mobile open-left">
                                <i class="fa fa-bars"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>
                        
                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown hidden-xs">
                            </li>
                            <li class="hidden-xs">
                                <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->
