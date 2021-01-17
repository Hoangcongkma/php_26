<?php 
	require_once "../helpers/query_helper.php";
	$data = $_POST;
	$data_update= [
'name'=> $data ['name']
'descriptiom'=>$data['description']
	]

	// var_dump($data);

	// $query = "UPDATE categories SET name=' ". $data['name'] ." ' ,description=' ". $data['description'] ." ' WHERE  id = " . $data['id'];

	$status = update('categories',$data_update, $data['id']);

	header("Location: categories.php");
?>

