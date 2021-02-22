<?php 
ob_start();
session_start();
if(!isset($_SESSION["idUser"]) && $_SESSION["idGroup"]==!1){
	header("location:../index.php");
	}
	
require "../lib/dbCon.php";
require "../lib/quantri.php";
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>My blog</title>
<link rel="stylesheet" type="text/css" href="layout.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<style type="text/css">
body {
	background-image: url();
}
</style>
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
    </div>
    <!--end menu-adimin-->
  <table width="100%" border="1" style=" margin-bottom:100px;">
      <tr>
        <td colspan="7" style="text-align:center;"><b>Danh Sách Loại Tin</b></td>
      </tr>
      <tr style="text-align:center;">
        <td><b>ID Loại tin</b></td>
        <td><b>Tên</b></td>
        <td><b>Tên không dấu</b></td>
        <td><b>Thứ tự</b></td>
        <td><b>Ẩn - Hiện</b></td>
        <td><b>Tên thể loại</b></td>
        <td><a href="themloaitin.php"><b>Thêm</b></a></td>
      </tr>
      <?php 
	  $loaitin = DanhSachLoaiTin($conn);
		while($row = mysqli_fetch_assoc($loaitin)){
   
	  ?>
      <tr style="text-align:center;">
        <td><?php echo $row["idLT"]?></td>
        <td><?php echo $row["Ten"]?></td>
        <td><?php echo $row["Ten_KhongDau"]?></td>
        <td><?php echo $row["ThuTu"]?></td>
        <td><?php echo $row["AnHien"]?></td>
        <td><?php echo $row["TenTL"]?></td>
        <td><p><a href="sualoaitin.php?idLT=<?php echo $row["idLT"]?>"><b>Sửa</b></a> - </p>
        <p><a onClick="return confirm ('Bạn có chắc là muốn xóa không?')" href="xoaloaitin.php?idLT=<?php echo $row["idLT"];?>"><b>Xóa</b></a></p></td>
      </tr>
      <?php
	  }
	  ?>
  </table>
</div><!--end container-->
</body>
</html>