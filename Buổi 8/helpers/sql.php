<?php 
include_once 'connect.php';

function select($table){
	$query = "SELECT * FROM $table";
// echo $query;
	// $connect = connect();
	
	$conn = new connection();

	$conn->connect();

	$connect = $conn->connect();

	$result = $connect->query($query);
	
	$data = array();
	while ($row = $result->fetch_assoc()) {
		$data[] = $row;
	}

	return $data;

}

//add process
function insert($table, $data){

	$query = "INSERT INTO $table (";
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
	
	$connect = connect();
	$status = $connect->query($query);
	return $status;
}

//edit process
function update($table, $data){
	$query = "UPDATE $table SET";

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
	$query .= $string1 . " WHERE `id` = " . $data['id'];
	// return $query;
	$conn = connect();
	$status = $conn->query($query);
	if ($status) {
		header("Location: $table.php");
	}else {
		echo "FALSE";
	}
}

//get data
function get_data($table, $id){
	$query = "SELECT * FROM $table WHERE `id` = $id";
	// return $query;

	$connect = connect();
	$result = $connect->query($query);
	$data = $result->fetch_assoc();
	return $data;
}

//delete
function delete($table, $id){
	$query = "DELETE FROM $table WHERE `id` = $id";
	$conn = connect();
	$status = $conn->query($query);
	if ($status) {
		header("Location: $table.php");
	}else {
		echo "FALSE";
	}
}
?>