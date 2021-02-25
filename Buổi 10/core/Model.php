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
			$query = "SELECT * FROM ". $table;
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
			$query  = "SELECT " . $sub_string . " FROM " . $table;
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