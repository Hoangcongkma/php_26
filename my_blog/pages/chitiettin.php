<?php
if(isset($_GET["id"])){
  $id = $_GET["id"];
  settype($id, "int");
}else{
  $id =61;
}
?>
<?php
CapNhatSoLanXemTin($conn,$id);
?>

<div class="TieuDeTin">
	<h4>BÀI VIẾT</h4>
</div>
<div class="NoiDung">
		<?php
        	$chitiettin= chitiettin($conn,$id);
			while($row_chitiettin= mysqli_fetch_assoc($chitiettin)){
		?>
        <h3 class="title" style=" padding-left:1% ; padding-top:10%; color:#00F;" ><?php echo $row_chitiettin["TieuDe"]?></span></h3>
        <br>	
        <div class="tomtat">
        <?php echo $row_chitiettin["TomTat"]?>
        </div>
        <div class="chitiet">
        <?php echo $row_chitiettin["Content"]?>
        </div>
        <?php
			}
		?>
</div><!--end NoiDung-->