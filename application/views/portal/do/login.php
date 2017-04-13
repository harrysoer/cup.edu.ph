<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
  <?php if (isset($error)) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            </div>
        <?php endif; ?>

<?=form_open('do/login/status')?>
<fieldset>
    <legend>LOGIN</legend>
	<input type="username" name="username" required="" placeholder="Username">
	<input type="password" name="password" required="" placeholder="password">
	<input type="submit" name="Submit">
</fieldset>
</form>
</body>
</html>