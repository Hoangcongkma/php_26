<?php 
session_start();
// if(!isset($_SESSION["idUser"]) && $_SESSION["idGroup"]==!1){
// 	header("location:../index.php");
// 	}
	
require "../lib/dbCon.php";
require "../lib/quantri.php";
?>
<?php 
  $id =$_GET["id"];
  settype($id,"int");
  $chitiettin = ChiTietTin($conn,$id);
  $row = mysqli_fetch_assoc($chitiettin);
?>
<?php
  if(isset($_POST["btnsua"])){
    // Upload hinh
    $error= [];
    $target_dir = "../upload/tintuc/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $urlHinh = $_FILES["fileToUpload"]["name"];
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    $TieuDe =$_POST["TieuDe"];
    $TieuDe_KhongDau = changeTitle($TieuDe);
    $TomTat = $_POST["TomTat"];
    $Ngay = date("Y-m-d");
    $idUser = $_SESSION["idUser"];
    $Content = $_POST["Content"];
    $idLT = $_POST["idLT"];
      settype($idLT, "int");
    $idTL = $_POST["idTL"];
      settype($idTL, "int");
    $SoLanXem = 0;
    $TinNoiBat = $_POST["TinNoiBat"];
    $AnHien = $_POST["AnHien"];
      settype($AnHien,"int");


    if(empty($TieuDe)){
      $error['TieuDe'][]= "Bạn không được để trống Tiêu đề";
    }elseif(strlen($TieuDe)<9){
      $error['TieuDe'][]= "Bạn phải nhập tiêu đề tối thiểu 10 ký tự";
    }elseif(strlen($TieuDe)>150){
      $error['TieuDe'][] ="Bạn không được nhập tiêu đề quá 250 ký tự";
    }
    if (empty($TomTat)) {
      $error['TomTat'][] = "Tóm tắt không được rỗng"; 
   }elseif(strlen($TomTat)<9){
     $error['TomTat'][] = "Bạn không được nhập tóm tắt ít hơn 9 ký tự";
   }elseif(strlen($TomTat)>500){
     $error['TomTat'][]= "Bạn không được nhập tóm tắt lớn hơn 150 ký tự";
  
   }
   if (empty($Content)) {
    $error['Content'][] = "Nội dung không được rỗng"; 
  }elseif(strlen($Content)<9){
    $error['Content'][] = " Nội dung không được ít hơn 9 ký tự";
  }elseif(strlen($Content)>100000){
    $error['Content'][] = "Nội dung không được lớn hơn 2000 ký tự";
  }
  if (empty($urlHinh)) {
    $error['urlHinh'][] = "urlHinh không được rỗng"; 
  }  
    if(!count($error)> 0){
    $sql ="UPDATE `tin` SET `TieuDe`='$TieuDe', `TieuDe_KhongDau`='$TieuDe_KhongDau', `TomTat`='$TomTat', `urlHinh`='$urlHinh', `Ngay`='$Ngay', `idUser`='$idUser', `Content`='$Content', `idLT`='$idLT', `idTL`='$idTL', `SoLanXem`='$SoLanXem', `TinNoiBat`='$TinNoiBat', `AnHien`='$AnHien' WHERE `id`='$id' ";
      mysqli_query($conn,$sql);
      header("location:listtintuc.php");
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
<script type="text/javascript" src="ckeditor/config.js"></script>
<script  type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
      <form action="" method="post" enctype="multipart/form-data">  
      	<table width="705" border="1">
          <tr>
            <td colspan="2">Sửa tin tức</td>
          </tr>
          <tr>
            <td width="61">Tiêu Đề</td>
            <td width="628"><input value="<?php echo $row["TieuDe"] ?>" type="text" name="TieuDe" id="TieuDe"><?php
				if(isset($error['TieuDe'])){
				?>
				<span stype="color:red;"><?php
				foreach($error['TieuDe'] as $value){
				  echo "$value";}
				?></span>
				   
				<?php } ?></td>
          </tr>
          <tr>
            <td>Tóm tắt</td>
            <td><textarea  name="TomTat" id="TomTat"><?php echo $row["TomTat"]?></textarea><?php
				if(isset($error['TomTat'])){
				?>
				<span stype="color:red;"><?php
				foreach($error['TomTat'] as $value){
				  echo "$value";}
				?></span>
				   
				<?php } ?></td>
          </tr>
          <tr>
            <td>urlHinh</td>
            <td>
              <input type="file" name="fileToUpload" id="fileToUpload">
              <img src="../upload/tintuc/<?php echo $row["urlHinh"] ?>" style="float:left; margin:5px;" width="150" height="100"  alt=""/>    <?php
					if(isset($error['urlHinh'])){
					?>
					<span stype="color:red;"><?php
					foreach($error['urlHinh'] as $value){
					  echo "$value";}
					?></span>
					   
					<?php } ?>
              <!-- <div class="urlhinh" style="width: 150px;height: 150px;background-color:white;float:left;border: 1px solid green;" ></div> -->
            </td>
          </tr>
          <tr>
            <td>Nội dung</td>
            <td><textarea name="Content" id="Content"><?php echo $row["Content"]; ?></textarea>

              <script type="text/javascript">CKEDITOR.replace('Content');</script>
              <?php
					if(isset($error['Content'])){
					?>
					<span stype="color:red;"><?php
					foreach($error['Content'] as $value){
					  echo "$value";}
					?></span>
					   
					<?php } ?>
            </td>
          </tr>
          <tr>
            <td>Tên loại tin</td>
            <td>
                <select name="idLT" id="idLT">
            	<?php
                $loaitin = DanhSachLoaiTin($conn);
        		      while($row_loaitin = mysqli_fetch_assoc($loaitin)){
        		  ?>
      	         <option  <?php if($row_loaitin["idLT"]==$row["idLT"]) echo "selected ='selected'"; ?>value="<?php echo $row_loaitin["idLT"] ?>"><?php echo $row_loaitin["Ten"] ?>
                 </option>
              <?php
              }
      		    ?>
                </select>
            </td>
          </tr>
          <tr>
            <td>Tên thể loại</td>
            <td>
              <select name="idTL" id="idTL">
      	       <?php
              	$theloai = DanhSachTheLoai($conn);
      			     while($row_theloai = mysqli_fetch_assoc($theloai)){
  		        ?>
      	         <option <?php if($row_theloai["idTL"]==$row["idTL"]) echo "selected ='selected'"; ?>value="<?php echo $row_theloai["idTL"] ?>"><?php echo $row_theloai["TenTL"] ?>   
                 </option>
                <?php
  			         }
  		          ?>
              </select>
                </td>
          </tr>
          <tr>
            <td>Tin nổi bật</td>
            <td><p>
              <label>
                <input <?php if($row["TinNoiBat"]==1) echo "checked = 'checked'"; ?>  type="radio" name="TinNoiBat" value="1" id="TinNoiBat_0">
                Nổi bật
              </label>
        <br>
            <label>
              <input <?php if($row["TinNoiBat"]==0) echo "checked = 'checked'"; ?>  type="radio" name="TinNoiBat" value="0" id="TinNoiBat_1">
              Bình thường
            </label>
        <br>
            </p></td>
          </tr>
          <tr>
            <td>Ẩn - Hiện</td>
            <td><p>
              <label>
                <input <?php if($row["AnHien"]==1) echo "checked = 'checked'"; ?> type="radio" name="AnHien" value="1" id="AnHien_0">
                Hiện
              </label>
        <br>
              <label>
                <input <?php if($row["AnHien"]==0) echo "checked = 'checked'"; ?>  type="radio" name="AnHien" value="0" id="AnHien_1">
                Ẩn
              </label>
        <br>
            </p></td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" name="btnsua" id="btnsua" value="Sửa "></td>
          </tr>
        </table>
      
    </form><!--end form-->
  </div><!--end container-->
</body>
</html>