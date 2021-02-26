<?php
$idTL =$_GET["idTL"];
settype($idTL,"int");
?>
<div class="TieuDeTin">
	<?php 
		$tentheloai = tentheloai($conn,$idTL);
			$row_tentheloai = mysqli_fetch_assoc($tentheloai);
	?>
	<h4><?php echo $row_tentheloai["TenTL"]?></h4>
</div>
<div class="NoiDung">
		<?php
        	$tintheotheloai = tintheotheloai($conn,$idTL);
			while($row = mysqli_fetch_assoc($tintheotheloai)){
		?>
		<img src="upload/tintuc/<?php echo $row["urlHinh"] ?>" alt="" width="88%" height="200" alt=""  style=" padding-left:10%; padding-top:3%; margin-bottom:3px; margin-top:3px;" />
        <h3 class="title" style=" padding-left:10%" ><a href="index.php?p=chitiettin&id=<?php echo $row['id'];?>" style="text-decoration:none;"><?php echo $row["TieuDe"] ?></a></h3>
        <?php
			}
		?>
</div><!--end NoiDung-->