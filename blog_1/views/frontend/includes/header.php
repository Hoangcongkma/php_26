<?php 
						foreach ($categories as $key => $value) {
							foreach ($categories as $key2 => $value2) {
								if ($value2['parent_id'] == $value['id']) {
										$arrS[$value['id']][$value2['id']] = $value2;
								}
							}
						}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My blog &mdash; Free Fully Responsive HTML5 Bootstrap Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="assets2/css/animate.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="assets2/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="assets2/css/bootstrap.css">

	<link rel="stylesheet" href="assets2/css/style.css">
	<!-- Modernizr JS -->
	<script src="assets2/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="assets2/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-offcanvas">
		<a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
		<div class="fh5co-bio">
			<figure>
				<img src="assets2/images/ava.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
			</figure>
			<h3 class="heading">About Me</h3>
			<h2>Hoàng Mạnh Công</h2>
			<p>Sinh viên Học Viện Kỹ Thuật Mật Mã </p>
			<ul class="fh5co-social">
				<li><a href="https://www.facebook.com/hoangcongCnow.vn/"><i class="icon-facebook"></i></a></li>
				
			</ul>
		</div>

		<div class="fh5co-menu">
			<div class="fh5co-box">
				<h3 class="heading">Categories</h3>
				<ul>
					<li><a href="index.php?type=frontend&mod=home&act=index">Home</a></li>

					<?php 
					if (isset($arrS)) {
						
					

					foreach ($arrS as $key => $value) {?>

						<div class="dropdown">
							  <li style="cursor: pointer;" class="dropdown-toggle"id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    <a>
								  	<?php foreach($categories as $key2 => $value2){if($value2['id'] == $key) echo $value2['name']?><?php } ?>	
								</a>
							  </li>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							    <?php foreach($value as $key => $data){ ?>
								    <li><a href="index.php?type=frontend&mod=category&act=index&id=<?php echo $data['id'] ?>"><?php echo $data['name'] ?></a></li>
								  <?php  }?>
							  </div>
							</div>
						<?php 
					} 
				}

			?>
				</ul>
			</div>
			<h3 class="heading"><a href="index.php?type=backend&mod=auth&act=login">Log in</a></h3>
			<div class="fh5co-box">
				<h3 class="heading">Search</h3>
				<form action="index.php?type=frontend&mod=post&act=search" method="POST">
					<div class="form-group">
							<input type="text" class="form-control" placeholder="Type a keyword" name="key">
							<button type="submit" name="ok" style="margin-top: 20px" class="btn btn-primary">Search</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END #fh5co-offcanvas -->
	<header id="fh5co-header">
		
		<div class="container-fluid">

			<div class="row">
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				<ul class="fh5co-social">
					<li><a href="https://www.facebook.com/hieu.nd1201"><i class="icon-facebook"></i></a></li>
					<li><a href="https://www.instagram.com/hieusng/"><i class="icon-instagram"></i></a></li>
				</ul>
				<div class="col-lg-12 col-md-12 text-center">
					<h1 id="fh5co-logo"><a href="index.html">Hoàng Công Kma<sup>Blog Bán Súng</sup></a></h1>
				</div>

			</div>
		
		</div>

	</header>