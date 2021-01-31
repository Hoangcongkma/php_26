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
		$this->database_name = "php_26";
	}


	public function connect(){

		$connect = new mysqli($this->servername, $this->username, $this->password, $this->database_name);
		if ($connect->connect_errno) {
			echo "Fail" . $connect->connect_error;
			exit();
		}

		return $connect;
	}
}

?>