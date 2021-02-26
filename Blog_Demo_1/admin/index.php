<?php 
session_start();
//if(!isset($_SESSION["idUser"]) && $_SESSION["idGroup"]==!1){
	//header("location:../index.php");
	//}
	
require "../lib/dbCon.php";
require "../lib/quantri.php";
?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>My blog</title>
<link rel="stylesheet" type="text/css" href="layout.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="container">
    <div class="title-admin">
    	<div class="box-trangchu-admin">
 			<h1>Trang Quản Trị</h1>
        </div>
    </div><!---end title-admin-->
  <div class="menu-admin">
  	<?php  require"menu-admin.php"?>
  </div><!--end menu-adimin-->
</div>
<!--end container-->
</body>
</html>