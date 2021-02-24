<?php 
session_start();
// if(!isset($_SESSION["idUser"]) && $_SESSION["idGroup"]==!1){
// 	header("location:../index.php");
// 	}
	
require "../lib/dbCon.php";
require "../lib/quantri.php";
?>
<?php
if(isset($_POST["btnThem"])){
    // Upload hinh
  $error = [];
  $target_dir = "../upload/tintuc/";
  $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
  $urlHinh = $_FILES["fileToUpload"]["name"];
  $time = date('Y-m-d');
  //$urlHinh =$time.$urlHinh;
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
  if (empty($TieuDe)) {
     $error['tieude'][] = "Tiêu đề không được rỗng"; 
  }elseif(strlen($TieuDe) <9 ){
    $error['tieude'][] = "Bạn không được nhập Tiêu Đề ít hơn 9 ký tự";
  }elseif(strlen($TieuDe)>150){
    $error['tieude'][] = "Bạn không được nhập Tiêu Đề lớn hơn 150 ký tự";
    }
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
    if (!count($error) > 0 ) {
        $sql ="INSERT INTO `tin` (`TieuDe`, `TieuDe_KhongDau`, `TomTat`, `urlHinh`, `Ngay`, `idUser`, `Content`, `idLT`, `idTL`, `SoLanXem`, `TinNoiBat`, `AnHien`) VALUES ('$TieuDe', '$TieuDe_KhongDau', '$TomTat', '$urlHinh', '$Ngay', '$idUser', '$Content', '$idLT', '$idTL', '$SoLanXem', '$TinNoiBat', '$AnHien')";
        mysqli_query($conn,$sql);
        header("location:listtintuc.php");
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
    <td colspan="2">Thêm tin tức</td>
    </tr>
  <tr>
    <td width="61">Tiêu Đề</td>
    
    <td width="628"><input type="text" name="TieuDe" id="TieuDe">
	<?php
    if(isset($error['tieude'])){
    ?>
    <span stype="color:red;"><?php
    foreach($error['tieude'] as $value){
      echo "$value";}
    ?></span>
       
    <?php } ?></td>  
    
  </tr>
  <tr>
    <td>Tóm tắt</td>
    
    <td><textarea  name="TomTat" id="TomTat"></textarea><?php
    if(isset($error['TomTat'])){
    ?>
    <span stype="color:red;"><?php
    foreach($error['TomTat'] as $value){
      echo "$value";}
    ?></span>
       
    <?php } ?>
    </td>
  </tr>
  <tr>
    <td>urlHinh</td>
    <td>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <?php
    if(isset($error['urlHinh'])){
    ?>
    <span stype="color:red;"><?php
    foreach($error['urlHinh'] as $value){
      echo "$value";}
    ?></span>
       
    <?php } ?></td>  
    </td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td><textarea name="Content" id="Content"></textarea>
     <script type="text/javascript">
	CKEDITOR.replace('Content');
	</script>
    <?php
    if(isset($error['Content'])){
    ?>
    <span stype="color:red;"><?php
    foreach($error['Content'] as $value){
      echo "$value";}
    ?></span>
       
    <?php } ?>
    </td>  
    </td>
  </tr>
  <tr>
    <td>Tên loại tin</td>
    <td><select name="idLT" id="idLT">
    	<?php
        $loaitin = DanhSachLoaiTin($conn);
		while($row_loaitin = mysqli_fetch_assoc($loaitin)){
		?>
    	<option value="<?php echo $row_loaitin["idLT"] ?>"><?php echo $row_loaitin["Ten"] ?></option>
        <?php
        }
		?>
    </select></td>
  </tr>
  <tr>
    <td>Tên thể loại</td>
    <td><select name="idTL" id="idTL">
    	<?php
        	$theloai = DanhSachTheLoai($conn);
			while($row = mysqli_fetch_assoc($theloai)){
		?>
    	<option value="<?php echo $row["idTL"] ?>"><?php echo $row["TenTL"] ?></option>
        <?php
			}
		?>
    </select></td>
  </tr>
  <tr>
    <td>Tin nổi bật</td>
    <td><p>
      <label>
        <input type="radio" name="TinNoiBat" value="1" id="TinNoiBat_0" checked="1">
        Nổi bật</label>
      <br>
      <label>
        <input type="radio" name="TinNoiBat" value="0" id="TinNoiBat_1">
        Bình thường</label>
      <br>
    </p></td>
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
    <td colspan="2"><input type="submit" name="btnThem" id="btnthem" value="Thêm"></td>
    </tr>
</table>
    
    </form><!--end form-->
</div><!--end container-->
</body>
</html>