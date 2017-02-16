<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="row">
	<div class="col-md-12 ">
		<!-- carousel background part -->
		<div id="carousel-one" class="carousel slide" data-ride="carousel">
	        <ol class="carousel-indicators">
	            <li data-target="#carousel-one" data-slide-to="0" class="active"></li>
	            <li data-target="#carousel-one" data-slide-to="1"></li>
	            <li data-target="#carousel-one" data-slide-to="2"></li>
	        </ol>
	        <div class="carousel-inner">
	            <div class="item active">
	                <img src="<?= base_url('assets/images/login-portal/carousel1.jpg')?>" class="img-responsive" alt="First slide">
	                <div class="carousel-caption">
	                    <p> Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
	                </div>
	            </div>
	            <div class="item">
	                <img src="<?= base_url('assets/images/login-portal/image3.jpg')?>" class="img-responsive" alt="Second slide">
	                <div class="carousel-caption">
	                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
	                </div>
	            </div>
	            <div class="item">
	                <img src="<?= base_url('assets/images/login-portal/image1.jpg')?>" class="img-responsive" alt="Third slide">
	                <div class="carousel-caption">
	                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
	                </div>
	            </div>
	        </div>
	        <a class="left carousel-control" href="#carousel-one" data-slide="prev" style="z-index: 1;"><span class="glyphicon glyphicon-chevron-left"></span></a>
	        <a class="right carousel-control" href="#carousel-one" data-slide="next" style="z-index: 1;" ><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
        <!-- END OF CAROUSEL -->

        <!-- main content text -->
        <div class="main-text">
        	<center  style="z-index: -1;" >
	            <img src="<?= base_url('assets/images/login-portal/Untitled-1.png') ?>" style="z-index: -1;" class="img-responsive" >
	        </center>
        	<div class="text-center">
        	    <div class="">
                    <a class="btn btn-clear btn-sm btn-min-block" data-toggle="modal"  onClick="$('#myModal').modal()">Login</a>
                    <a class="btn btn-clear btn-sm btn-min-block" href="..">Home</a>
                </div>
			</div>
		</div>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">

		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		                <h4 class="modal-title" id="myModalLabel">Log in</h4>
		            </div> <!-- /.modal-header -->

		            <div class="modal-body">
			            <!-- show the error here, sana katulad din sa buhay ko -->
			            <?php if (isset($error)) : ?>
							<div class="col-md-12">
								<div class="alert alert-danger" role="alert">
									<?= $error ?>
								</div>
							</div>
						<?php endif; ?>
		                <?php if (validation_errors()) : ?>
							<div class="col-md-12">
								<div class="alert alert-danger" role="alert">
									<?= validation_errors() ?>
								</div>
							</div>
						<?php endif; ?>

		                <form id="ipasa">
		                    <div class="form-group">
		                        <div class="input-group">
		                            <input name="idNumber" type="text" class="form-control" id="uLogin" placeholder="ID Number" >
		                            <label for="uLogin" class="input-group-addon glyphicon glyphicon-user"></label>
		                        </div>
		                    </div> <!-- /.form-group -->

		                    <div class="form-group">
		                        <div class="input-group">
		                            <input name="password" type="password" class="form-control" id="uPassword" placeholder="Password" >
		                            <label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
		                        </div> <!-- /.input-group -->
		                    </div> <!-- /.form-group -->
		                

		            </div> <!-- /.modal-body -->

		            <div class="modal-footer">
		                <button class="form-control btn btn-primary" type="submit">Log me in!</button>
		        		</form>

		                <div class="progress">
		                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="100" style="width: 0%;">
		                        <span class="sr-only">progress</span>
		                    </div>
		                </div>
		            </div> <!-- /.modal-footer -->
		        </div><!-- /.modal-content -->
		    </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->


    </div>
</div>


		<div id="push">
		</div>
