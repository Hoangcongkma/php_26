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
    <div class="menu-admin">
    <?php  require"menu-admin.php"?>
    </div><!--end menu-adimin-->
    <form action="" method="post">
    <table width="100%" border="1" style=" margin-bottom:100px;">
  <tr>
    <td colspan="14"><div align="center" class="glyphicon-zoom-in"><strong>DANH SÁCH TIN TỨC</strong></div></td>
    </tr>
  <tr>
    <td width="2%" height="60">ID</td>
    <td width="8%">Tiêu Đề</td>
    <td width="11%">Tiêu Đề Không Dấu</td>
    <td width="13%">Tóm tắt</td>
    <td width="17%">Hình ảnh minh họa</td>
    <td width="6%">Ngày </td>
    <td width="5%">Người Đăng</td>
    <td width="15%">Nội Dung</td>
    <td width="7%">Loại tin</td>
    <td width="3%">Thể loại</td>
    <td width="3%">Số lần xem</td>
    <td width="3%">Tin Nổi Bật</td>
    <td width="3%">Ẩn Hiện</td>
    <td width="4%"><a href="themtintuc.php">Thêm</a></td>
  </tr>
  <tr>
  <?php

  $tin = DanhSachTin($conn); 
	while($row = mysqli_fetch_assoc($tin)){
  ?>
    <td height="112"><?php echo $row["id"] ?></td>
    <td><?php echo $row["TieuDe"] ?></a></td>
    <td><?php echo $row["TieuDe_KhongDau"] ?></td>
    <td><?php echo $row["TomTat"] ?></td>
    <td><img src="../upload/tintuc/<?php echo $row["urlHinh"] ?>" style="float:left; margin:5px; width="150" height="100"  alt=""/></td>
    <td><?php echo $row["Ngay"] ?></td>
    <td><?php echo $row["Username"] ?></td>
    <td><textarea name="textarea" id="textarea" style="width:170px; height:150px; float:right;"><?php echo $row["Content"] ?></textarea></td>
    <td><?php echo $row["Ten"] ?></td>
    <td><?php echo $row["TenTL"] ?></td>
    <td><?php echo $row["SoLanXem"] ?></td>
    <td><?php echo $row["TinNoiBat"] ?></td>
    <td><?php echo $row["AnHien"] ?></td>
    <td><p><a href="suatintuc.php?id= <?php echo $row["id"];?>">Sửa</a> -</p>
      <p><a onClick ="return confirm ('Bạn có chắc là muốn xóa không?')" href="xoatintuc.php?id= <?php echo $row["id"];?>">Xóa</a></p></td>
  </tr>
  <?php
	}
  ?>
</table>

    <!--end table-->
  </form><!--end form -->
</div><!--end container-->
</body>
</html>