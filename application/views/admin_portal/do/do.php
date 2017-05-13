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
                    <h4 class="pull-left page-title">Dean's Office Accounts</h4>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body"> 
                        <a type="button" href="<?=site_url('admin/portal/do/add')?>" class="btn btn-info">Add <span class="glyphicon glyphicon-plus" ></span></a>

        <table class="table table-bordered  ">
            <thead>
                <tr>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($get_do != null   ): ?>
                
            <?php foreach ($get_do as $do): ?>
                <tr>
                    <td><?=$do['last_name']?></td>
                    <td><?=$do['first_name']?></td>
                    <td><?=$do['college_dept']?></td>
                    
                    <td>
                        <a type="button"  class="btn btn-info">Edit <span class="glyphicon glyphicon-pencil" ></span></a>
                        <a type="button" onclick="confirm('delete this user?')" href="<?=site_url('admin/portal/do/delete/').$do['id']?>" class="btn btn-danger">Delete <span class="glyphicon glyphicon-trash" ></span></a>
                    </td>
                </tr>
            <?php endforeach ?>
            <?php else: ?>
                NO DATA
            <?php endif ?>

            </tbody>
        </table>
                        </div>
                    </div>
                </div>
            </div> <!-- End row -->

        </div> <!-- container -->
    
    </div> <!-- content -->

</div>