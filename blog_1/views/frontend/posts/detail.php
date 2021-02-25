
<?php require_once('views/frontend/includes/header.php') ?>
	<!-- <a href="#" class="fh5co-post-prev"><span><i class="icon-chevron-left"></i> Prev</span></a>
	<a href="#" class="fh5co-post-next"><span>Next <i class="icon-chevron-right"></i></span></a> -->
	<!-- END #fh5co-header -->
	<div class="container-fluid">
		<div class="row fh5co-post-entry single-entry">
			<article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
				<figure class="animate-box">
					<img src="<?php echo('images/post/'.$posts['thumbnail']) ;?>" alt="Image" class="img-responsive">
				</figure>
				<span style="font-size: 25px"><a href="index.php?type=frontend&mod=post&act=detail&id=<?php echo $value['id'] ?>">
					<?php $code = $posts['category_id'];
						foreach ($categories as $key => $value2) {
							if ($value2['id'] == $code) {
								echo $value2['name'];
							}
						}
					?>
				</a></span><span style="font-size: 25px"><span><a> / </a></span><a href="index.php?type=frontend&mod=home&act=index">Home</span>
				<h2 class="fh5co-article-title animate-box"><?php echo $posts['title']; ?></h2>
				<span class="fh5co-meta fh5co-date animate-box"><?php $code = $posts['user_id'];echo $users[$code-1]['name'];?></span>
				<span class="fh5co-meta fh5co-date animate-box"><?php echo $posts['created_at']; ?></span>
				
				<div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-left content-article">
					<div class="row">
						<div class="col-lg-12 cp-r animate-box">
							<?php foreach (explode(PHP_EOL, $posts['content']) as $key => $value) {?>
								<p><?php echo $value; ?></p>
							<?php } ?>
						</div>	
					</div>
				</div>
				<div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-left content-article">
					<div class="row">
						<div class="col-lg-12 cp-r animate-box">
									<?php $tag =  $posts['tag']; foreach(explode(',', $tag) as $key => $value){;?>
										<span style="background-color: #e4e4f9; padding: 5px; cursor: pointer;color: #f7c873">#<?php echo $value; ?></span>
									<?php }?>	
						</div>	
					</div>
				</div>
			</article>
		</div>

		<div class="row fh5co-post-entry single-entry">
			<article style="text-align: left;" class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
				<h3>LEAVE A REPLY</h3>
				<p>Your email address will not be published. Required fields are marked *</p>
				<form action="index.php?type=backend&mod=comment&act=store" method="POST">
					<input type="hidden" name="id" value="NULL">
					<input type="hidden" name="parent_id" value="NULL">
					<input type="text" name="user_name" placeholder="Name *">
					<input type="email" name="email" placeholder="E-mail *"><br>
					<textarea  name="content" id="" style="width: 80%" rows="5"></textarea><br>
					<input type="hidden" name="created_at" value="<?php date_default_timezone_set("Asia/Ho_Chi_Minh");
					echo date("Y-m-d h:i:sa"); ?>">
					<input type="hidden" name="post_id" value="<?php echo $_GET['id']?>">
					<input type="hidden" name="like_count" value="NULL">
					<button type="submit" style="margin-top: 30px" class="btn btn-primary">SUBMIT COMMENT</button>
				</form>
			</article>
		</div>
		<div class="row fh5co-post-entry single-entry">
			<article style="text-align: left;" class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
				<?php if (isset($comments)) {
				foreach ($comments as $key => $value) { if($value['parent_id'] == 0){?>
					<div>	
						<span><b style="font-size: 20px"><?php echo $value['user_name']; ?></b></span>
						<span style="font-size: 12px; font-style: italic;"><?php echo $value['created_at']; ?></span>
						<p style="max-height: 150px;overflow-y:auto; font-size: 15px"><?php echo $value['content']; ?></p>
						<?php require('views/frontend/posts/form_reply.php') ?>
					</div>
					<div style="margin-left: 30px; border:1px solid #f7c873; border-radius: 5px; padding: 20px;box-sizing: border-box; background-color:whitesmoke;">
						<?php foreach($comments as $key => $value2){ if($value2['parent_id'] == $value['id']){ ?>
							<span><b style="font-size: 20px"><?php echo $value2['user_name']; ?></b></span>
							<span style="font-size: 12px; font-style: italic;"><?php echo $value2['created_at']; ?></span>
							<p style="max-height: 150px;overflow-y: auto; font-size: 15px;"><?php echo $value2['content']; ?></p>
							<?php require('views/frontend/posts/form_reply.php') ?>
							<hr style="height:1px;border-width:0;color:#f7c873;background-color:#f7c873">
						<?php }}?>	
					</div>
				<?php }}} ?>
			</article>	
		</div>	
	</div>
<?php require_once('views/frontend/includes/footer.php') ?>