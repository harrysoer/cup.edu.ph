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
                    <h4 class="pull-left page-title">Register DO Account</h4>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Register DO Account</h3></div>
                        <div class="panel-body"> 
                            <?php if (validation_errors()) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
            </div>
    <?php endif; ?>
        <?=form_open('admin/portal/do/add')?>
            
        
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" id="" placeholder="Username">
            </div>
            
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" id="" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="">First Name</label>
                <input type="text" name="first_name" class="form-control" id="" placeholder="First Name">
            </div>

            <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="" placeholder="Last Name">
            </div>

            <div class="form-group">
                <label for="">College Department</label>
                <select name="college_dept" id="input" class="form-control" required="required">
                    <option>-----Select One-----</option>
                    <option value="College of Office Administration and Computer Technology">College of Office Administration and Computer Technology</option>
                    <option value="College of Business Administration">College of Business Administration</option>
                    <option value="College of Education">College of Education</option>
                    <option value="College of Arts and Sciences">College of Arts and Sciences</option>
                    <option value="College of Nursing and Midwifery">College of Nursing and Midwifery</option>
                </select>
            </div>

        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
                        </div>
                    </div>
                </div>
            </div> <!-- End row -->

        </div> <!-- container -->
    
    </div> <!-- content -->

</div>