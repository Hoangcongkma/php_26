<?php 

include 'Connection.php';
/**
 * 
 */


class Model
{
	private $conn;
	protected $table;

	function __construct(){
		$connect = new Connection();

		$this->conn = $connect->connect();
	}

	function select(){
		$query = "SELECT * FROM $this->table";


		$result = $this->conn->query($query);
		
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
	}

	function insert($data)
	{
		$query = "INSERT INTO $this->table (";
		$string1 = '';
		$string2 = '';
		$count = 0;

		foreach ($data as $col => $value) {
			$count++;
			$string1 .= "`" . $col . "`";
			if ($count != count($data)) {
				$string1 .= ",";
			}

			$string2 .= "'" . $value . "'";
			if ($count != count($data)) {
				$string2 .= ",";
			}
		}

		$query .= $string1 . ")"." VALUES (".$string2.")";
		$status = $this->conn->query($query);
		return $status;
	}

//edit process
	function edit($data, $id)
	{
		$query = "UPDATE $this->table SET";

		$string1 = '';
		$string2 = ',';
		$i = 0;

		foreach ($data as $col => $value) {
			$i++;
			$string1 .= " `$col` = '$value'";
			if ($i!= count($data)) {
				$string1 .= $string2;
			}
		}
		$query .= $string1 . " WHERE `id` = " . $id;
		$conn = $this->conn;
		$status = $conn->query($query);
		return $status;
	}

//get data
	function get_data($id)
	{
		$query = "SELECT * FROM $this->table WHERE `id` = $id";
		$result = $this->conn->query($query);
		$data = $result->fetch_assoc();
		return $data;
	}

//delete
	function delete($id)
	{
		$query = "DELETE FROM $this->table WHERE `$this->table`.`id` = $id";
		$status = $this->conn->query($query);
		return $status;
	}
}

?>