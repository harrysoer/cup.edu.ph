
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
                        <center><img src="<?=base_url('/assets/for_sportal/img/logo2.png');?>" style="margin-top: 5px; min-width: 100px; min-height: 100px;" /></center>
                           <center><h1 style="letter-spacing: 3px; color: #4a7f43; font-family: Old English Text MT;">City University of Pasay</h1></center><br><br>
                            <center><h1 style="letter-spacing: 5px;">WELCOME, 
                                <?=$this->session->first_name." ".$this->session->last_name?>
                            </h1></center>
                            <center><h2 style="letter-spacing: 5px;">-Web Admin-</h2></center>
                            <br>
                            <center><h2 style="letter-spacing: 5px;">Current Sem &amp; Year:</h2></center>
                            <center><h2 style="letter-spacing: 5px;"><?=$this->session->sem.", ".$this->session->school_year?></h2></center>

                            <hr style="width: 70%; height: 5px; margin-left: auto; margin-right: auto; border-color: #666; border-style: inset;">
                            <br>
                            <center><h4 style="font-family: Script MT Bold; color: #808000;">"A Premier, Globally Competitive and Value-laden<br>Institute - connecting, transforming, and trancending for academic excellence."</h4></center>
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
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
</div>
<!-- END wrapper --> 

