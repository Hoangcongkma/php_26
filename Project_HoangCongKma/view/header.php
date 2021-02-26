<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hoàng Công Kma - Blog Moblie Shop</title>
	<link rel="stylesheet" type="text/css" href="../controller/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../controller/font/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../controller/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../controller/css/style.css">
	<link rel="stylesheet" type="text/css" href="../controller/css/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="../controller/js/javascript.js"></script>
	<script src="../controller/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script>new WOW().init();</script>
</head>
<body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="../controller/index.php" class="navbar-brand"><img src="images/logo2.png"></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="?action=home">Trang chủ</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Sản Phẩm<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php
								$x = new m_product();
								$menu = $x->get_brand();
								while ($set = $menu -> fetch()):
									?>
									<li><a href="?action=productbrand&id=<?php echo $set[0];?>"><?php echo $set[1];?></a></li>
								<?php endwhile; ?>
							</ul>
						</li>
						<li><a href="#">Khuyến mãi</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="?action=pay"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
						<?php
						if (isset($_SESSION['adminh'])) {
							$username = strtoupper($_SESSION['adminh']);
							echo "<li><a href='?action=admin'><span class='glyphicon glyphicon-user'></span> Con Chào cụ $username</a></li>
							<li><a href='?action=logout'><span class='glyphicon glyphicon-log-out'></span> Thoát</a></li>";
						}else {
							echo "<li><a href='?action=register'><span class='glyphicon glyphicon-user'></span> Đăng ký</a></li>
							<li><a href='?action=login'><span class='glyphicon glyphicon-log-in'></span> Đăng nhập</a></li>";
						}
						?>
					</ul>
				</div>
			</div>
		</nav>
	</header>