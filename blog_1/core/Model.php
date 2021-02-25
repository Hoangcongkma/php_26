<?php 
require_once('core/Connection.php');
class Model {
	private $conn;
	public function __construct() {
		$connection = new Connection();
		$this->conn = $connection->connect();
	}
	protected function select($table, $columns = '*'){
		if ($columns == '*') {
			$query = "SELECT * FROM ". $table . " ORDER BY (created_at) DESC ";
		}
		else if(is_array($columns))
		{
			$sub_string = '';
			foreach ($columns as $i => $column) {
				$sub_string .= $column;
				if ($i + 1 != count($columns)) {
					$sub_string .= ',';
				}
			}
			$query  = "SELECT " . $sub_string . " FROM " . $table. " ORDER BY (created_at) DESC ";
		}
		else{
			exit();
		}
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}

	protected function selectView($table, $columns = '*'){
		if ($columns == '*') {
			$query = "SELECT * FROM ". $table . " ORDER BY (view_count) DESC LIMIT 4 ";
		}
		else if(is_array($columns))
		{
			$sub_string = '';
			foreach ($columns as $i => $column) {
				$sub_string .= $column;
				if ($i + 1 != count($columns)) {
					$sub_string .= ',';
				}
			}
			$query  = "SELECT " . $sub_string . " FROM " . $table. " ORDER BY (view_count) DESC LIMIT 4 ";
		}
		else{
			exit();
		}
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}

	protected function insert($table, $data){
		// Câu lệnh truy vấn
		$query = "INSERT INTO ".$table;
		$string_1 = '';
		$string_2 = '';
		$i = 0;

		foreach ($data as $column => $value) {
			$i++;

			$string_1 .= $column;
			if ($i != count($data)) {
				$string_1 .= ',';
			}
			$string_2 .= "'" . $value . "'";
			if ($i != count($data)) {
		 	 	$string_2 .= ',';
		 	}
		 }
		 $string = '('. $string_1 .')' . ' Value ' . '('. $string_2 .')';
		// Thực thi câu lệnh
		$query = $query . $string;
		$result = $this->conn->query($query);
		return $result;
	}
	protected function delete($table, $id){
		$query = "DELETE FROM "  . $table ." WHERE id = " . $id;
		$result = $this->conn->query($query);
		return $result;
	}
	protected function update($table, $data, $id){
		$query = "UPDATE $table SET ";
		$string = '';
		$i=0;
		foreach ($data as $column => $value) {
			$i++;
			if ($i != count($data)) {
				$string .= $column . " = " . "'" . $value . "'" . ',';
			}
			else
				$string .= $column . " = " . "'" . $value . "'";
		}
		$query = $query . $string . " WHERE id = " . $id;
		$result = $this->conn->query($query);
		return $result; 
	}
	protected function getID($table,$id){
		$query = "SELECT * from $table WHERE id = ". $id;
		$result = $this->conn->query($query);
		$row = $result->fetch_assoc();
		return $row;
		}
	protected function getEmail($table,$email){
		$query = "SELECT * from $table WHERE email = ". $email;
		$result = $this->conn->query($query);
		$row = $result->fetch_assoc();
		return $row;
		}
	protected function getPost($table,$post_id){
		$query = "SELECT * from $table WHERE post_id = ". $post_id. " ORDER BY (created_at) DESC ";
		$result = $this->conn->query($query);
		while($row = $result->fetch_assoc()) { 
			$post[] = $row;
		}
		if (isset($post))
			return $post;
		else 
			return NULL;
	}
	protected function keySearch($table,$search){
		$query = "SELECT * from $table where tag like '%$search%' ";
		$result = $this->conn->query($query);
		while($row = $result->fetch_assoc()) { 
			$post[] = $row;
		}
		if (isset($post))
			return $post;
		else 
			return NULL; 
	}
	protected function where($table,$where = []){
		$query = "SELECT * from $table WHERE ";
		$string = '';
		$i = 0;
		foreach ($where as $column => $value) {
			$i++;
			$string .= "$column=" . "'". $value . "'" ;
			if ($i != count($where)) {
				$string .= " AND ";
			}
		}
		$query .= $string;
		$result = $this->conn->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
		$data[] = $row;		}
		return $data;
	}
 }
 ?>