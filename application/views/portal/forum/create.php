<!DOCTYPE html>
<html>
<head>
	<title>forum</title>
</head>
<body>
	<?=form_open('forum/create')?>
		<input type="text" name="title" placeholder="Title" required=""><br><br>
		<textarea style="width: 546px; height: 193px; margin: 0px;" type="text" name="text" required=""></textarea><br>
		<input type="submit" value="Create">
	</form>
</body>
</html>