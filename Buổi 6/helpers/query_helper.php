<?php 
require_once "../helpers/connect_helper.php";

function select($table,$columns='*'){
	if ($columns=='*') {
		$query = "SELECT * FROM " .	$table;
	}elseif (is_array($columns)) {
		$sub_string = '';
		foreach ($columns as $i=> $column) {
			$sub_string = $column;
			if ($i + 1 != count($columns)) {
				$sub_string .=',';
			}
		}
		$query = "SELECT" . $sub_string . " FROM " .$table;
	}else{
		exit();

	}

	$query = "SELECT * FROM " .	$table;
	$connection = connect();
	$result = $connection-> query($query) ;

	$data = array();

	while ($row = $result->fetch_assoc()) {
		$data[]= $row;
	}
	return $data;
}


function insert ($table, $data){
	$query = "INSERT INTO $table";
	$string_1 = '';
	$string_2 = '';

	$i =0 ;
	foreach ($data as $column => $value) {
		$i++;
		$string_1 .= $column;
		if ($i != count($data)) {
			$string_1 .= ',';
		}

		$string_2 .= "'" .value . "'";
		if ($i != count($data)) {
 		//nếu không phải là giá trị cuối cùng thì mới thêm  dấu ,
			$string_2 .=",";
		}
	}
	$string = '('.$string_1 .')'.'values'. '('.$string_2 .')';
	$query =$query . $string ;
	$conn = $connect();
	$status = $conn->query($query);
	return $status;

}

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

function update($table, $data, $id){
	$query = "UPDATE $table SET";

	$string = '';
	//Sử dụng dấu phẩy khi nó không phải là đối tượng cuối cùng.

	$i = 0;

	foreach ($data as $col => $value) {
		$i++;
		$string .= " `$col` = '$value'";
		if ($i!= count($data)) {
			$string .= ',';
		}
	}
	$query .= $string . " WHERE `id` = " . $id ;
	// return $query;
	
	$conn = connect();
	$status = $conn->query($query);
	return $status;

}

?>