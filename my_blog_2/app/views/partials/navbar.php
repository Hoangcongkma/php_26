<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">My Site</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="/">Home</a></li>
				<li><a href="#">About us</a></li>
			</ul>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
			<?php if (! isset($_SESSION['username'])) : ?>
				<li><a data-toggle="modal" href='#modal-login'>Login</a></li>
				<li><a data-toggle="modal" href="#modal-register">Register</a></li>
			<?php else : ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']; ?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/auth/logout" class="fa fa-sign-out">Logout</a></li>
					</ul>
				</li>
			<?php endif; ?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>