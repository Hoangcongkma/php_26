<?php
session_start();
$username = $_POST['user'];
$pwd =$_POST['pwd'];
$check = check($username, $pwd);
if ($check) {
	$_SESSION['Login']= true;
	setcookie('success', 'Đăng nhập Thành công' , time() + 2);
	header("Location: index.php");
}else{
	setcookie('success', 'Đăng nhập không Thành công' , time() + 2);
	header("Location: index.php");
}
function check($username,$pwd){
	$users = [
		[ 'username' => 'hmc',
		'pwd' => '123456'
	],
	[
		'username' => 'acnf',
		'pwd' => '1232435'
	],
];
	foreach ($users as $user) {
		if ($user['username'] == $username && $user['pwd'] == $pwd) {
			return true;
		}
	}

	return false;
}


?>