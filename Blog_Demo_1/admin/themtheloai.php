<?php 
header('Content-Type: text/html; charset=utf-8');
ob_start();
session_start();
// if(!isset($_SESSION["idUser"]) && $_SESSION["idGroup"]==!1){
// 	header("location:../index.php");
// 	}
	
require "../lib/dbCon.php";
require "../lib/quantri.php";
?>


<?php
if(isset($_POST["btnThem"])){
  
	$TenTL =$_POST["TenTL"];
	$TenTL_KhongDau = changeTitle($TenTL);
	$ThuTu = $_POST["ThuTu"];
		settype($ThuTu,"int");
		$AnHien = $_POST["AnHien"];
		settype($AnHien,"int");
    $error= [];
    if(empty($TenTL)){
      $error['TenTL'][]="Tên thể loại không được trống nhé bạn !";
    }elseif(strlen($TenTL)<2){
      $error['TenTL'][]="Tên thể loại không được nhỏ hơn 9 ký tự";
    }elseif(strlen($TenTL)>250){
      $error['TenTL'][]="Tên thể loại không được quá 250 ký tự";      
    }
    if(empty($ThuTu)){
      $error['ThuTu'][] = "Thứ tự chưa được nhập vào !";
    }elseif(strlen($ThuTu)>6){
      $error['ThuTu'][]= "Thứ tự không được vượt quá hàng trăm nghìn";
    }
    if(!count($error)> 0){
    $sql ="INSERT INTO theloai (`TenTL`, `TenTL_KhongDau`, `ThuTu`, `AnHien`) VALUES ('$TenTL','$TenTL_KhongDau','$ThuTu','$AnHien')";
		mysqli_query($conn,$sql);
		header("location:listtheloai.php");
  }
	
}
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Lập Trình PHP - Demo Website -Admin</title>
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
    <form action="" method="post" accept-charset="utf-8">
    <table width="700" border="1">
  <tr>
    <td colspan="2">THÊM THỂ LOẠI</td>
    </tr>
  <tr>
    <td>Tên thể loại</td>
    <td><input type="text" id="TenTL" name="TenTL">
    	<?php
    if(isset($error['TenTL'])){
    ?>
    <span stype="color:red;"><?php
    foreach($error['TenTL'] as $value){
      echo "$value";}
    ?></span>
       
    <?php } ?>
    </td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><input type="text" id="ThuTu" name="ThuTu">
    	<?php
    if(isset($error['ThuTu'])){
    ?>
    <span stype="color:red;"><?php
    foreach($error['ThuTu'] as $value){
      echo "$value";}
    ?></span>
       
    <?php } ?>
    </td>
  </tr>
  <tr>
    <td>Ẩn - Hiện</td>
    <td><p>
      <label>
        <input type="radio" name="AnHien" value="1" id="AnHien_0" checked="1">
        Hiện</label>
      <br>
      <label>
        <input type="radio" name="AnHien" value="0" id="AnHien_1">
        Ẩn</label>
      <br>
    </p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="btnThem" id="btnThem" value="Thêm"></td>
  </tr>
</table><!--end table-->
</form><!--end form-->
</div><!--end container-->
</body>
</html>