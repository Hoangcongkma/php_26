<?php 
ob_start();
session_start();
if(!isset($_SESSION["idUser"]) && $_SESSION["idGroup"]==!1){
	header("location:../index.php");
	}
	
require "../lib/dbCon.php";
require "../lib/quantri.php";
?>
<?php
if (isset($_POST["btnthem"])){
	$Ten = $_POST["Ten"];
	$Ten_KhongDau = changeTitle($Ten);
	$ThuTu = $_POST["ThuTu"];
		settype($ThuTu,"int");
  $AnHien = $_POST["AnHien"];
    settype($AnHien,"int");
	$idTL = $_POST["idTL"];
    settype($idTL,"int");
    $error = [];
    if(empty($Ten)){
      $error['Ten'][]= "Tên loại tin chưa được nhập vào !";
    }elseif(strlen($Ten)<3){
      $error['Ten'][] = "Tên loại tin phải lớn hơn 3 ký tự ";
    }elseif(strlen($Ten)> 250){
      $error['Ten'][]="Tên loại tin không được vượt quá 250 ký tự";
    }
    if(empty($ThuTu)){
      $error['ThuTu'][]="Thứ tự không được rỗng và phải là số";
    }elseif(strlen($ThuTu)>6){
      $error['ThuTu'][]= "Thứ tự không được vượt quá hàng trăm nghìn";
    }
    if(!count($error)>0){
      $sql ="
			INSERT INTO loaitin 
			(`Ten`, `Ten_KhongDau`, `ThuTu`, `AnHien`,`idTL`)
			VALUES ('$Ten','$Ten_KhongDau','$ThuTu','$AnHien','$idTL')
		";
		mysqli_query($conn,$sql);
		header("location:listloaitin.php");
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
    <form action="" method="post">
    	<table width="600" border="1">
  <tr>
    <td colspan="2">THÊM LOẠI TIN</td>
    </tr>
  <tr>
    <td>Tên loại tin</td>
    <td><input type="text" name="Ten" id="Ten">
    <?php
    if(isset($error['Ten'])){
    ?>
    <span stype="color:red;"><?php
    foreach($error['Ten'] as $value){
      echo "$value";}
    ?></span>
       
    <?php } ?>
    </td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><input type="text" name="ThuTu" id="ThuTu">
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
        <input type="radio" name="AnHien" value="1" id="AnHien_0" checked=1>
        Hiện</label>
      <br>
      <label>
        <input type="radio" name="AnHien" value="0" id="AnHien_1">
        Ẩn</label>
      <br>
    </p></td>
  </tr>
  <tr>
    <td>Tên thể loại</td>
    <td><select name="idTL" id="idTL">
    <?php 
	$theloai = DanhSachTheLoai($conn);
 // $result = mysqli_query($conn, $sql);
 
while($row = mysqli_fetch_assoc($theloai)){
	?>
    <option value="<?php echo $row['idTL']?>" ><?php echo $row['TenTL']?></option>
    <?php
	}
	?>
    </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="btnthem" id="btnthem" value="Thêm"></td>
  </tr>
</table>

    </form>
</div><!--end container-->
</body>
</html>