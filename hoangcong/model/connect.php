<?php
	class connect {
		public function connect() {
			$dbn = "mysql:host=localhost;dbname=blog_1";
			$user="root";
			$password="";
			$this->db=new PDO($dbn,$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		}
		public function query($select){
			$result = $this->db->query($select);
			return $result;
		}
		public function exec($query){
			$result = $this->db->exec($query);
			return $result;
		}
		public function getdata($select){
			$results = $this->db->query($select);
			$result  = $results->fetch();
			return $result;
		}
		public function getdatas($select){
			$results = $this->db->query($select);
			$result  = $results->fetchAll();
			return $result;
		}
	}
?>