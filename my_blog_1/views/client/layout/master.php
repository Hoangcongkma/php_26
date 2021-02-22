<!DOCTYPE html>
<html lang="en">
<?php include 'views/client/include/header.php'?>
<body>
	<?php include 'views/client/include/navbar.php'?>
	<!-- END nav -->

	<?php require_once 'views/client/'.$page.'.php'; ?>


	<?php include 'views/client/include/main_footer.php'; ?>

	<!-- loader -->
	<?php include 'views/client/include/loader.php'; ?>
	<?php include 'views/client/include/footer.php'; ?>


</body>
</html>