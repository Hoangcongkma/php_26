<?php 
	class Connection {
		private $servername = "localhost";
		private $username = "root";
		private $password = ""; 
		private $dbname = "my_blog";

		public function connect(){
			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			if ($conn->connect_error) {
				echo "Fail to connect to MySQL: ".$conn->connect_error;
				exit();
			}
			else
				return $conn;
		}
	
	}
?>