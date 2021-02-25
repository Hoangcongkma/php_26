<?php 
include_once App::getAppPath() . 'views/partials/header.php';
include_once App::getAppPath() . 'views/auth/login.php';
include_once App::getAppPath() . 'views/auth/register.php';
?>

<h3>Wow! Today is hot.</h3>
<i class="help-block">
	<?php echo date('F j-Y H:i a'); ?>
</i>

<?php include_once App::getAppPath() . 'views/partials/footer.php'; 
?>