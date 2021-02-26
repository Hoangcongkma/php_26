<?php
$idLT =$_GET["idLT"];
settype($idLT,"int");
?>
<?php
$sotinmottrang =5;
if(isset($_GET["trang"])){
	$trang = $_GET["trang"];
	settype($trang,"int");
}else{
	$trang = 1;
}
$from = ($trang - 1) * $sotinmottrang;
?>
<div class="TieuDeTin">
<?php
	$theloai_loaitin = theloai_loaitin($conn,$idLT);
		$row_theloai_loaitin = mysqli_fetch_assoc($theloai_loaitin);
?>
	<h4>Trang chủ -- <?php echo $row_theloai_loaitin["TenTL"]?> -- <?php echo $row_theloai_loaitin["Ten"] ?></h4>
</div>
<div class="NoiDung">
		<?php
        	$tintrongloai = tintheoloaitin_phantrang($conn,$idLT,$from,$sotinmottrang);
			while($row = mysqli_fetch_assoc($tintrongloai)){
		?>
		<img src="upload/tintuc/<?php echo $row["urlHinh"] ?>" alt="" width="88%" height="200" alt=""  style=" padding-left:10%; padding-top:3%; margin-bottom:3px; margin-top:3px;" />
        <h3 class="title" style=" padding-left:10%" ><a href="index.php?p=chitiettin&id=<?php echo $row['id'];?>" style="text-decoration:none;"><?php echo $row["TieuDe"] ?></a></h3>
        <?php
			}
		?>
</div><!--end NoiDung-->
</hr>
<div class="pagination">
<?php
$t= tintrongloai($conn,$idLT);
$tongsotin =mysqli_num_rows($t);
$tongsotrang = ceil($tongsotin/$sotinmottrang);
for ($i=1; $i<=$tongsotrang ; $i++) { 

?> 
  <a href="index.php?p=tintrongloai&idLT=<?php echo $idLT?>&trang=<?php echo $i; ?>" class="page"><?php echo $i; ?></a>
<?php } ?>
</div>

