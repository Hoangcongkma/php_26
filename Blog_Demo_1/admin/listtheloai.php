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
<title>My Blog</title>
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
  <div class="menu-admin"></div><!--end menu-adimin-->
  <?php  require"menu-admin.php"?>
	<table width="600" border="1">
	  <tr>
	    <td colspan="7">DANH SÁCH THỂ LOẠI</td>
	    </tr>
	  <tr>
	    <td>id</td>
	    <td>Tên Thể Loại</td>
	    <td>Tên Thể Loại không dấu</td>
	    <td>Thứ tự</td>
	    <td>Ẩn - Hiện</td>
	    <td><a href="themtheloai.php">Thêm</a></td>
	  </tr>
	  <?php

	  $theloai = DanhSachTheLoai_admin($conn);
		while($row = mysqli_fetch_assoc($theloai)){
	  ?>
	  <tr>
	    <td><?php echo $row["idTL"]?></td>
	    <td><?php echo $row["TenTL"]?></td>
	    <td><?php echo $row["TenTL_KhongDau"]?></td>
	    <td><?php echo $row["ThuTu"]?></td>
	    <td><?php echo $row["AnHien"]?></td>
	    <td><p><a href="suatheloai.php?idTL=<?php echo $row["idTL"];?>">Sửa</a>-</p>
	      <p><a onClick="return confirm ('Bạn có chắc là muốn xóa không?')" href="xoatheloai.php?idTL=<?php echo $row["idTL"];?>">Xóa</a></p></td>
  </tr>
  <?php
  }
  ?>
</table>

</div>
<!--end container-->
</body>
</html>
