<?php
session_start();
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
}else{
	echo "Không tồn tại";
}
//$username = $_SESSION['username'];
//echo $username;
?>