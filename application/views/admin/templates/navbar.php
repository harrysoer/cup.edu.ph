    <!-- ========== Left Sidebar Start ========== -->

    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <div class="user-details">
                <div class="pull-left">
                    <!-- <img src="images/users/avatar-1.jpg" alt="" class="thumb-md img-circle"> -->
                </div>
                <div class="user-info">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?=$this->session->first_name." ".$this->session->last_name?><br><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           
                            <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                            <li><a href="<?=site_url('logout')?>"><i class="md md-settings-power"></i> Logout</a></li>
                        </ul>
                    </div>
                    
                    <p class="text-muted m-0">Administrator</p>
                </div>
            </div>
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="md md-web"></i><span>C.U.P. Webpages</span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul style="">
                            <!-- <li href="">
                                <a href="javascript:void(0);" class="waves-effect"><span>Home Page</span> <span class="pull-right"></span></a>
                            </li>
                             -->
                            <li>
                                <a href="<?=site_url('admin/news/list')?>" class="waves-effect"><span>News Page</span><span class="pull-right"></span></a>
                            </li>
                            
                            <li>
                                <a href="<?=site_url('admin/gallery/albums/list')?>" class="waves-effect"><span>Gallery Page</span><span class="pull-right"></span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><span>Admission Page</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul style=" ">
                                    <li href="">
                                        <a href="<?=site_url('admin/admission/forms/list')?>" class="waves-effect"><span>Downloadable <span style="padding-left:15px;">Forms</span></span><span class="pull-right"></span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <li>
                        
                    </li>
                    <li class="has_sub">
                        <a href="" class="waves-effect"><i class="md md-school"></i><span>Portal</span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul style="">
                            <li><a href="<?=site_url('admin/portal')?>"><span>Deans Office</span></a></li>
                            <li><a href="<?=site_url('forum')?>"><span>Forum</span></a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Left Sidebar End --> 


