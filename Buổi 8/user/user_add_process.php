<?php 
include '../helpers/Model.php';
include_once('User.php');
$user_object = new User();
$status = $user_object->create();
if ($status) {
	header("Location: users.php");
}else {
	echo "false";
}
 ?>