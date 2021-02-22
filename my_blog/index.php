<?php
session_start();
require "lib/dbCon.php";
require "lib/quantri.php";
if (isset($_GET["p"]))
    $p = $_GET["p"];
else
    $p = "";
?>
<?php
//kiem tra login
if(isset ($_POST["btnlogin"])){
	$un = $_POST["txtUn"];
	$pa = $_POST["txtPa"];
	//$pa = md5($pa);
	$con = mysqli_connect('localhost', "root","","my_blog");
	$sql ="
		SELECT * FROM Users
		WHERE Username ='$un'
		AND Password ='$pa'
	";
    $user = mysqli_query($con,$sql);
	if(mysqli_num_rows($user)==1){
		//dang nhap dung
		$row = mysqli_fetch_array($user);
		$_SESSION["idUser"] = $row['idUser'];
		$_SESSION["Username"] = $row['Username'];
		$_SESSION["HoTen"] = $row['HoTen'];
		$_SESSION["idGroup"] = $row['idGroup'];
		$_SESSION["NgaySinh"] = $row['NgaySinh'];

		}
	}

?>

<?php
//thoat
if(isset ($_POST["btnthoat"])){
	session_destroy();
	}

?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Lập Trình PHP - Demo Website</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php require "blocks/title.php" ?>
<div class="container">
	<div id="Trang-header">
   	<img src="upload/quangcao/banner1.jpg" alt="" width="100%" height="100%" />
    </div>
    <!--end page-header-->
    <div class="menu">
    	<?php require "blocks/menu.php" ?>
    </div>
    <!--end page-menu-->
    <div class="page-left">
    <?php require"blocks/left.php" ?>
    </div>
    <!--end page-left-->
    <div class="Page-Content">
    <?php
            switch ($p) {
				case "tintheotheloai": require"pages/tintheotheloai.php";
               break;
                case "tintrongloai": require"pages/tintrongloai.php";
               break;
                case "chitiettin": require"pages/chitiettin.php";
                break;
                case "timkiem": require"pages/timkiem.php";
                break;
                default: require"pages/trangchu.php";
            }
        ?>
    </div>
    <!--end page-Content-->
    <div class="page-ringht">
    <?php require"blocks/right.php" ?>
    </div>
    <!--end page-right-->
    <div class="page-footer">
    <?php require"blocks/footer.php" ?>
    </div>
    <!--end footer-->
</div><!--end container-->
<script
	  src="https://code.jquery.com/jquery-1.12.4.js"
	  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
	  crossorigin="anonymous"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>
