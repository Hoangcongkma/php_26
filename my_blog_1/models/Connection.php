<?php 

class Connection {
	private $servername;
	private $username;
	private $password;
	private $database;

	function __construct (){
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->database_name = "my_blog";
	}


	public function connect(){

		$connect = new mysqli($this->servername, $this->username, $this->password, $this->database_name);
		mysqli_set_charset($connect, "UTF8");
		if ($connect->connect_errno) {
			echo "Fail" . $connect->connect_error;
			exit();
		}

		return $connect;
	}
}

?>