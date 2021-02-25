
<?php require_once('views/frontend/includes/header.php') ?>
	<!-- END #fh5co-header -->
	<div class="container-fluid">
		<h1 style="text-align: center; margin-bottom: 50px;">
			<a href="">
				<?php foreach ($categories as $key => $value) { 
					if($value['id'] == $_GET['id']) { 
						echo $value['name'];?>
				<?php } }?>
			</a></h1>
		<div class="row fh5co-post-entry">
			<?php foreach ($posts as $key => $value) { ?>
				<?php if($value['category_id'] == $_GET['id']){?>
				<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
					<a href="index.php?type=frontend&mod=post&act=detail&id=<?php echo $value['id'] ?>">
						<img src="<?php echo('images/post/'.$value['thumbnail']) ;?>" alt="Image" class="img-responsive">
					</a>
				</figure>
				<span class="fh5co-meta">
					<a href="index.php?type=frontend&mod=post&act=detail&id=<?php echo $value['id'] ?>">
						<?php $code = $value['category_id']; foreach($categories as $key => $value2){
							if($value2['id'] == $code) echo $value2['name']; ?>
						<?php } ?>
					</a>
				</span>
				<h2 class="fh5co-article-title"><a href="index.php?type=frontend&mod=post&act=detail&id=<?php echo $value['id'] ?>"><?php echo $value['title'] ?></a></h2>
				<span class="fh5co-meta fh5co-date"><?php echo $value['created_at']; ?></span>
			</article>
			  <?php } ?>
			<?php } ?>
			<div class="clearfix visible-lg-block visible-md-block visible-sm-block visible-xs-block"></div>
		</div>
	</div>

<?php require_once('views/frontend/includes/footer.php') ?>