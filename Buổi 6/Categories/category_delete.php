 <?php 
	require_once "connect.php";
	$id = $_GET['id'];
	// var_dump($id);

	$query = "DELETE from categories where id = $id";

	$status = $conn->query($query);

	header("Location: categories.php");

?>