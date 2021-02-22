<section class="home-slider owl-carousel">
	<div class="slider-item">
		<div class="container">
			<div class="row d-flex slider-text justify-content-center align-items-center" data-scrollax-parent="true">

				<div class="img" style="background-image: url(<?php echo URL_TEMPLATE_CLIENT ?>/images/bg_1.jpg);"></div>

				<div class="text d-flex align-items-center ftco-animate">
					<div class="text-2 pb-lg-5 mb-lg-4 px-4 px-md-5">
						<h3 class="subheading mb-3">Featured Posts</h3>
						<h1 class="mb-5">Love the Delicious &amp; Tasty Foods</h1>
						<p class="mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia</p>
						<p><a href="#" class="btn btn-black px-3 px-md-4 py-3">Read More <span class="icon-arrow_forward ml-lg-4"></span></a></p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="slider-item">
		<div class="container">
			<div class="row d-flex slider-text justify-content-center align-items-center" data-scrollax-parent="true">

				<div class="img" style="background-image: url(<?php echo URL_TEMPLATE_CLIENT ?>/images/bg_2.jpg);"></div>

				<div class="text d-flex align-items-center ftco-animate">
					<div class="text-2 pb-lg-5 mb-lg-4 px-4 px-md-5">
						<h3 class="subheading mb-3">Bài viết nổi bật</h3>
						<h1 class="mb-5">I am A Blogger &amp; I Love Foods</h1>
						<p class="mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia</p>
						<p><a href="#" class="btn btn-black px-3 px-md-4 py-3">Read More <span class="icon-arrow_forward ml-lg-4"></span></a></p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>


<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-md-7 heading-section ftco-animate">
				<h2 class="mb-4"><span>Bài viết mới</span></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<?php foreach ($new as $key => $value) { 
						$created_at=  date ("jS M Y", strtotime($value['created_at']));
						?>
						<div class="col-md-3 ftco-animate">
							<div class="blog-entry">
								<a href="?mod=client&act=detail&c=post&id=<?php echo $value['id']?>" class="img d-flex align-items-end" style="background-image: url(<?php echo $value['thumbnail'] ?>);">
									<div class="overlay"></div>
								</a>
								<div class="text pt-3">
									<p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3"><?php echo $created_at; ?></span></p>
									<h3><a href="?mod=client&act=detail&c=post&id=<?php echo $value['id']?>"><?php echo $value['title'] ?></a></h3>
									<p class="mb-0"><a href="?mod=client&act=detail&c=post&id=<?php echo $value['id']?>" class="btn-custom">Xem tiếp <span class="icon-arrow_forward ml-4"></span></a></p>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-md-12 heading-section ftco-animate">
						<h2 class="mb-4"><span>Bài viết nổi bật</span></h2>
					</div>
				</div>
				<div class="row">
					<?php foreach ($view as $key => $value) { $created_at=  date ("jS M Y", strtotime($value['created_at']));?>
						<div class="col-md-3 ftco-animate">
							<div class="blog-entry">
								<a href="?mod=client&act=detail&c=post&id=<?php echo $value['id'];?>" class="img-2"><img src="<?php echo $value['thumbnail'] ?>" class="img-fluid" ></a>
								<div class="text pt-3">
									<p class="meta d-flex"><span class="pr-3"><?php echo $value['name'] ?></span><span class="ml-auto pl-3"><?php echo $created_at ?></span></p>
									<h3><a href="#"><?php $value['title'] ?></a></h3>
									<p class="mb-0"><a href="?mod=client&act=detail&c=post&id=<?php echo $value['id']?>" class="btn btn-black py-2">Xem tiếp <span class="icon-arrow_forward ml-4"></span></a></p>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12 heading-section ftco-animate">
						<h2 class="mb-4"><span>Công thức mới</span></h2>
					</div>
				</div>
				<div class="row">
					<?php foreach ($reci as $key => $value) { ?>
					<div class="col-md-6 col-lg-6 ftco-animate">
						<div class="blog-entry">
								<div class="img img-big img-big-2 d-flex align-items-end" style="background-image: url(<?php echo $value['thumbnail']  ?>);">
									<div class="overlay"></div>
									<div class="text">
										<span class="subheading"><?php echo $value['name'] ?></span>
										<h3><a href="?mod=client&act=detail&c=post&id=<?php echo $value['id']?>"><?php echo $value['title'] ?></a></h3>
										<p class="mb-0"><a href="?mod=client&act=detail&c=post&id=<?php echo $value['id']?>" class="btn-custom">Xem tiếp <span class="icon-arrow_forward ml-4"></span></a></p>
									</div>
								</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="sidebar-wrap pt-4">
					<div class="sidebar-box categories text-center ftco-animate">
						<h2 class="heading mb-4">Danh mục</h2>
						<ul class="category-image">
							<li>
								<a href="foods.html" class="img d-flex align-items-center justify-content-center text-center" style="background-image: url(<?php echo URL_TEMPLATE_CLIENT ?>/images/category-1.jpg);">
									<div class="text">
										<h3>Món ngon</h3>
									</div>
								</a>
							</li>
							<li>
								<a href="lifestyle.html" class="img d-flex align-items-center justify-content-center text-center" style="background-image: url(<?php echo URL_TEMPLATE_CLIENT ?>/images/category-2.jpg);">
									<div class="text">
										<h3>Công thức nấu ăn</h3>
									</div>
								</a>
							</li>
							<li>
								<a href="#" class="img d-flex align-items-center justify-content-center text-center" style="background-image: url(<?php echo URL_TEMPLATE_CLIENT ?>/images/category-2.jpg);">
									<div class="text">
										<h3>Nhà hàng</h3>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-counter ftco-section ftco-no-pt ftco-no-pb img" id="section-counter">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 d-flex">
				<div class="img d-flex align-self-stretch" style="background-image:url(<?php echo URL_TEMPLATE_CLIENT ?>/images/about.jpg);"></div>
			</div>
			<div class="col-md-6 pl-md-5 py-5">
				<div class="row justify-content-start pb-3">
					<div class="col-md-12 heading-section ftco-animate">
						<h2 class="mb-4">About Stories</h2>
						<p>Xa xa, đằng sau những ngọn núi chữ, xa các quốc gia Vokalia và Consonantia</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center py-5 bg-light mb-4">
							<div class="text">
								<strong class="number" data-number="10">0</strong>
								<span>Years of Experienced</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center py-5 bg-light mb-4">
							<div class="text">
								<strong class="number" data-number="200">0</strong>
								<span>Foods</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center py-5 bg-light mb-4">
							<div class="text">
								<strong class="number" data-number="300">0</strong>
								<span>Lifestyle</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center py-5 bg-light mb-4">
							<div class="text">
								<strong class="number" data-number="40">0</strong>
								<span>Happy Customers</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
</section>