
<?php require_once('views/frontend/includes/header.php') ?>
	<!-- END #fh5co-header -->
	<div class="container-fluid">
		<div class="row fh5co-post-entry">
			<h1 style="text-align: center;margin-bottom: 50px;"><a href="">Posts Searched</a></h1>
			<?php if(isset($posts)){foreach ($posts as $key => $value) {?>
				<?php require('views/frontend/includes/article.php') ?>
			<?php }} ?>
			<?php if (!isset($posts))echo "<h1 style='text-align:center;'>No posts results</h1>"?>
			<div class="clearfix visible-lg-block visible-md-block visible-sm-block visible-xs-block"></div>
		</div>
	</div>

<?php require_once('views/frontend/includes/footer.php') ?>