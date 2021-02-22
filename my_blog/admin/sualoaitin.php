<?php 
session_start();
if(!isset($_SESSION["idUser"]) && $_SESSION["idGroup"]==!1){
	header("location:../index.php");
	}
	
require "../lib/dbCon.php";
require "../lib/quantri.php";
?>
<?php 
$idLT = $_GET["idLT"];
settype($idLT,"int");
$chitiet = ChiTietLoaiTin($conn,$idLT);
$row = mysqli_fetch_assoc($chitiet);
?>
<?php
if(isset($_POST["btnsua"])){
  $Ten = $_POST["Ten"];
  $Ten_KhongDau = changeTitle($Ten);
  $ThuTu = $_POST["ThuTu"];
    settype($ThuTu,"int");
  $AnHien = $_POST["AnHien"];
    settype($AnHien,"int");
  $idTL = $_POST["idTL"];
    settype($idTL,"int");
    $error= [];
    if(empty($Ten)){
      $error['Ten'][]="Tên loại tin không được trống nhé bạn !";
    }elseif(strlen($Ten)<2){
      $error['Ten'][]="Tên loại không được nhỏ hơn 9 ký tự";
    }elseif(strlen($Ten)>250){
      $error['Ten'][]="Tên loại tin không được quá 250 ký tự";      
    }
    if(empty($ThuTu)){
      $error['ThuTu'][] = "Thứ tự chưa được nhập vào !";
    }elseif(strlen($ThuTu)>6){
      $error['ThuTu'][]= "Thứ tự không được vượt quá hàng trăm nghìn";
    }
    if(!count($error)> 0){
    $sql ="
      UPDATE `loaitin` SET `Ten` = '$Ten',`Ten_KhongDau` = '$Ten_KhongDau', `ThuTu` = '$ThuTu', `AnHien` = '$AnHien', `idTL` = '$idTL' WHERE `loaitin`.`idLT` = $idLT
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
    	<table width="600" border="1" style=" margin-bottom:100px;">
  <tr>
    <td colspan="2">SỬA LOẠI TIN</td>
    </tr>
  <tr>
    <td>Tên loại tin</td>
    <td><input value="<?php echo $row['Ten'] ?>"type="text" name="Ten" id="Ten">
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
    <td><input value="<?php echo $row['ThuTu']?>" type="text" name="ThuTu" id="ThuTu">
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
        <input  <?php if($row["AnHien"]==1) echo "checked = 'checked'"; ?>  type="radio" name="AnHien" value="1" id="AnHien_0">
        Hiện</label>
      <br>
      <label>
        <input <?php if($row["AnHien"]==0) echo "checked = 'checked'"; ?> type="radio" name="AnHien" value="0" id="AnHien_1">
        Ẩn</label>
      <br>
    </p></td>
  </tr>
    <tr>
      <td>Tên thể loại</td>
      <td><select name="idTL" id="idTL">
      <?php 
      	$theloai = DanhSachTheLoai($conn);
          while($row_theloai = mysqli_fetch_assoc($theloai)){
    	 ?>
            <option <?php if($row_theloai["idTL"]==$row["idTL"]) echo "selected = 'selected'";?> value="<?php echo $row_theloai['idTL']?>"> <?php echo $row_theloai['TenTL']?></option>
       <?php
      	}
      	?>
        </select></td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="btnsua" id="btnsua" value="Sửa"></td>
        </tr>
      </table>

    </form>
</div><!--end container-->
</body>
</html>