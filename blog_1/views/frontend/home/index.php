
<?php require_once('views/frontend/includes/header.php') ?>
	<!-- END #fh5co-header -->
	<div class="container-fluid">
		<div class="row fh5co-post-entry">
			<h1 style="text-align: center;margin-bottom: 50px;"><a href="">Latest Posts</a></h1>
			<?php foreach ($posts as $key => $value) { if($key < 8){?>
				<?php require('views/frontend/includes/article.php') ?>
			<?php }} ?>
			<div class="clearfix visible-lg-block visible-md-block visible-sm-block visible-xs-block"></div>
		</div>
		<div class="row fh5co-post-entry">
			<h1 style="text-align: center;margin-bottom: 50px;"><a href="">Most Views</a></h1>
			<?php foreach ($posts2 as $key => $value){?>
				<?php require('views/frontend/includes/article.php') ?>
			<?php } ?>
		</div>
	</div>

<?php require_once('views/frontend/includes/footer.php') ?>