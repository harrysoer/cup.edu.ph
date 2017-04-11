<!DOCTYPE html>
<html>
<head>
	<title>forum</title>
</head>
<body>

		<p><h3><?=$get_post['title']?></h3></p>
			<p><b>AUTHOR:</b>&nbsp;&nbsp;<?=$get_post['author']?>
				<b style="padding-right:1rem;padding-left:1rem;">|</b>
				<b>DATE:</b> <?=$get_post['dates']?></p>
			<p><?=$get_post['text']?></p>
			<hr>

		<h1>Comment(s)</h1>
			
			<?php foreach ($get_comments as $comments): ?>
				<fieldset >
				<h3><p><?=$comments['author']?></p> <b>|</b><?=$comments['dates']?>||<?=$comments['time']?></h3>
				<p><?=$comments['text']?></p>
				</fieldset>
			<?php endforeach ?>
			
	<!-- 	<?//php else: ?>
			<h3>No Comments yet</h3>
		<?//php endif ?> -->
		

		<?=form_open('forum/post/'.$get_post['id_posts'])?>
			<textarea style="width: 445px; height: 169px;" placeholder="Type Here" name="text" required ></textarea>
			<BR>
			<input type="submit" value="Create">
		</form>
</body>
</html>