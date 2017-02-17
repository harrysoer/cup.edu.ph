<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- this shit is temporary like your life -->
<?php if (isset($error)) : ?>
	<div class="col-md-12">
		<div class="alert alert-danger" role="alert">
			<?= $error ?>
		</div>
	</div>
<?php endif; ?>

<div class="container">
	<div class="row" style="padding-top:2rem;">
		<div class="col-md-12">		


			<h3>Register student's account</h3>
			<hr >
			
			<?php if (validation_errors()) : ?>
				<div class="col-md-12">
					<div class="alert alert-danger" role="alert">
						<?= validation_errors() ?>
					</div>
				</div>
			<?php endif; ?>

			<?= form_open();?>
				<div class="form-group">
					<label for="IDNUMBER">ID number</label>
					<input type="text" name="idNumber" class="form-control" id="IDNUMBER">
				</div>
				<div class="form-group">
					<label for=password>Password</label>
					<input type="password" name="password" id="pasword" class="form-control">
				</div>
				<div class="form-group">
					<label for="firstName">First Name</label>
					<input type="text" name="firstName" id="firstName" class="form-control">	
				</div>
				<div class="form-group">
					<label for="middleName">Middle Name</label>
					<input type="text" name="middleName" id="middleName" class="form-control">	
				</div>
				<div class="form-group">
					<label for="lastName">Last Name</label>
					<input type="text" name="lastName" id="lastName" class="form-control">	
				</div>
				<div class="form-group">
					<label for="course">Course</label>
					<input type="text" name="course" id="course" class="form-control">	
				</div>
				<div class="form-group">
					<label for="year">Year</label>
					<input type="text" name="year" id="year" class="form-control">	
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Register">
			</form>
		</div>
	</div>
</div>