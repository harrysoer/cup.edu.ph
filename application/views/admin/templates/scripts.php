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

        <!-- CUSTOM JS -->
        <script src="<?=base_url('assets/for_admin/js/jquery.app.js')?>"></script>
