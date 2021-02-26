<?php
require_once('connect.php'); 
	$data = $_POST;
	$query = "UPDATE categories SET name = '" . $data['name'] . "' , description ='". $data['description'] ."'  WHERE  id =  " . $data['id'];
	var_dump($query);
	$status = $conn->query($query);
    header("Location: categories.php");
?>