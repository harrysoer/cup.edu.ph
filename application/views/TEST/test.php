<!DOCTYPE html>
<html>
<head>
	<title>test</title>
<!-- data table -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?=base_url('assets/for_sportal/css/bootstrap.min.css');?>" />
<link href="<?php echo base_url('assets/for_admin/data-table/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">

</head>
<body>

 <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th style="width:125px;">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>

            <tfoot>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Date of Birth</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>         
<script src="<?=base_url('assets/for_admin/js/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/for_sportal/js/bootstrap.min.js');?>"></script> 

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
            "url": "<?php echo site_url('admin/news/callList')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1,-2 ], //last column
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
    
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('admin/ajax_delete')?>/"+id,
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