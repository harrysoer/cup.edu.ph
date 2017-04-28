<!DOCTYPE html>
<html>
<head>
	<title><?=$news_item['title']?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Base Css Files -->
    <link href="<?=base_url('assets/for_admin/css/bootstrap.min.css')?>" rel="stylesheet" />

</head>
<body>
	<div class="container" style="padding-top: 3rem;">

	<a type="button" class="btn btn-info" href="<?=site_url('admin/news/list')?>"><i class="fa fa-backward"></i>Return</a>
		<?php
		echo '<center><h2>'.$news_item['title'].'</h2></center><br>';
		echo '<center><h2>'.$news_item['author'].'</h2></center><br>';
		echo '<center><h2>'.$news_item['dates'].'</h2></center>';
		echo '<center><hr width="50%"></center>';
		echo $news_item['text'];
		?>
	</div>
	<script src="<?=base_url('assets/for_admin/js/bootstrap.min.js')?>"></script>
</body>
</html>