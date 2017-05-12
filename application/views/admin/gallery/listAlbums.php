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
                                <h4 class="pull-left page-title">Albums Data</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="<?=site_url('admin/gallery/albums/list')?>">Albums</a></li>
                                </ol>
                            </div>
                        </div>


                        <div class="panel">
                            
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="m-b-30">
                                            <a href="<?=site_url('admin/gallery/albums/create')?>"><button  class="btn btn-success waves-effect waves-light">Add <i class="fa fa-plus"></i></button></a>
                                        </div>
                                    </div>
                                </div>

                                <table class="table table-bordered table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th>Albums</th>
                                            <th style="width:125px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table> 
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Moltran.
                </footer>

            </div>

            <!-- MODAL -->
            <div id="dialog" class="modal-block mfp-hide">
                <section class="panel panel-info panel-color">
                    <header class="panel-heading">
                        <h2 class="panel-title">Are you sure?</h2>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="modal-text">
                                <p>Are you sure that you want to delete this row?</p>
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-md-12 text-right">
                                <button id="dialogConfirm" class="btn btn-primary">Confirm</button>
                                <button id="dialogCancel" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </div>
                    
                </section>
            </div>



        </div>
        <!-- END wrapper -->
        
 
        <!-- Examples -->
        <script src="<?=base_url('assets/for_admin/assets/magnific-popup/magnific-popup.js')?>"></script>
        

        <script src="<?php echo base_url('assets/for_admin/data-table/datatables/js/jquery.dataTables.min.js')?>"></script>
        <script src="<?php echo base_url('assets/for_admin/data-table/datatables/js/dataTables.bootstrap.js')?>"></script>


<script type="text/javascript">

var save_method; //for save method string
var table;

$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('admin/gallery/albums/callList')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

    //set input/textarea/select event when change value, remove class error and remove text help block 
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });

    console.log(table.ajax);
});



// function add_person()
// {
//     save_method = 'add';
//     $('#form')[0].reset(); // reset form on modals
//     $('.form-group').removeClass('has-error'); // clear error class
//     $('.help-block').empty(); // clear error string
//     $('#modal_form').modal('show'); // show bootstrap modal
//     $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
// }

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}


function delete_person(id)
{
    
    if(confirm('Are you sure to DELETE this whole album?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('admin/ajax_deleteAlbum')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

</script>

      
    </body>
</html>