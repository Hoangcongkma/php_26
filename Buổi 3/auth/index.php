<a href="login.php">Login</a>
<a href="logout.php">Thoát</a>
<?php
session_start();
if (isset($_SESSION['Login'])) {
	echo '<a href="logout.php">Thoát</a>';
}else{
	echo '<a href="login.php">Login</a>';
}
if (isset($_COOKIE['error'])) {
	echo "";
}
if (isset($_COOKIE['success'])) {
	echo "";
}
if (isset($_SESSION['Login'])) {
	echo "Đã login";
}else{
	echo "Chưa Login";
}
?>