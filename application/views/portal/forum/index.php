<!DOCTYPE html>
<html>
<head>
	<title>forum</title>
</head>
<body>
	<a href="<?=site_url('forum/create')?>"> Create Post</a>
		<?php foreach ($get_posts as $posts): ?>
			<p><h3><?=$posts['title']?></h3></p><br>
				<p><?=$posts['author']?></p><b>|</b><?=$posts['dates']?>&nbsp; ||&nbsp; <?=$posts['time']?>
				<p><?=$posts['text']?></p>
				<a href="<?=site_url('forum/post/').$posts['id_posts']?>">read</a>
		<?php endforeach ?>


</body>
</html>