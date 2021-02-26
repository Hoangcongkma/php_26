<?php 
session_start();
// if(!isset($_SESSION["idUser"]) && $_SESSION["idGroup"]==!1){
// 	header("location:../index.php");
// 	}
	
require "../lib/dbCon.php";
require "../lib/quantri.php";
?>

<?php 
$id = $_GET["id"];
settype($id,"int");

		$sql ="
			DELETE FROM tin
			WHERE id = '$id'
		";
		mysqli_query($conn,$sql);
		header("location:listtintuc.php");

?>
