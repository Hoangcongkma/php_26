<?php 
function connect (){
	$servername = "localhost";
	$username = "root";

	$password = "";

	$dbname = "php_26";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn-> connect_error) {

		echo "Failed" . $conn ->connect_error;

		exit();
	}

	return $conn;
}
?>