<?php 

class connection {
	var $servername;
	var $username;
	var $password;
	var $database;

	function connect(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database_name = "php_26";

		$connect = new mysqli($servername, $username, $password, $database_name);
		if ($connect->connect_errno) {
			echo "Fail" . $connect->connect_error;
			exit();
		}

		return $connect;
	}
}

?>