<?php 
session_start();
unset($_SESSION['login']);
unset($_SESSION['user_login']);
unset($_SESSION['ava_login']);
header("Location:index.php?type=frontend&mod=home&act=index");
 ?>