<style type="text/css">
  table {
}

 #table {
     text-align: center;
}
}
table, th, td {
    text-align: center;
}
</style>
<!--sidebar-menu-->
<div id="sidebar">
  <ul>
    <li><a href="<?=site_url('/dportal');?>"><i class="icon icon-home"></i> <span>HOME</span></a> </li>
    <li ><a href="<?=site_url('/dportal/course');?>"><i class="icon icon-th-list"></i> <span>Courses</span></a> </li>
    <li data-toggle="collapse" data-target="#products" class="collapsed"><a href="#"><i class="icon icon-calendar"></i> <span>CLASS SCHEDULES</span></a></li>
    <ul class="sub-menu collapse" id="products" style="text-align: left; font-size: 13px;">
      <li><a href="<?=site_url('/addsubject');?>">Add Schedule</a></li>
      <li><a href="<?=site_url('/viewsched');?>">Manage Schedules</a></li>
    </ul>
    <li class="active"><a href="<?=site_url('/dportal/faculty');?>"><i class="icon icon-user-md"></i> <span>Faculty</span></a> </li>
    <li class><a href="<?=site_url('/dportal/students');?>"><i class="icon icon-user"></i> <span>Students</span></a> </li>
    <li ><a href="<?=site_url('/forum3');?>"><i class="icon icon-comments-alt"></i> <span>UNIVERSITY FORUM</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?=site_url('/dportal');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a  class="current" href="#">Faculty</a></div>
    <h1>Faculty Account</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
          <div class="widget-content"  style="margin-left: 1rem;">
            <a type="button"  style="margin-left:-2rem"; class="btn btn-success" href="<?=site_url('dportal/faculty/add')?>">Add Faculty</a>
            <table  id="table" class="table table-striped table-bordered" style="margin-top: 2rem;" >
              <thead>
                <tr>
                  <th>ID Number</th>
                  <th>First Name</th>
                  <th>MI</th>
                  <th>Last Name</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
      </div>
    </div>
    </div>
  </div>


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
            "url": "<?php echo site_url('Portal_DO/ajax_listFaculty')?>",
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
            url : "<?php echo site_url('Portal_DO/ajax_delete')?>/"+id,
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



    
