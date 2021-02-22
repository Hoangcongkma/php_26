	<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="ddsmoothmenu-v.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="ddsmoothmenu.js">
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	method: 'toggle', // set to 'hover' (default) or 'toggle'
	arrowswap: true, // enable rollover effect on menu arrow images?
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<!-- Markup for mobile menu toggler. Hidden by default, only shown when in mobile menu mode -->
<a class="animateddrawer" id="ddsmoothmenu-mobiletoggle" href="#">
<span></span>
</a>
<div id="smoothmenu1" class="ddsmoothmenu">
<ul>
<li><a href="index.html">Trang chủ</a></li>
<?php
 $theloai = DanhSachTheLoai($conn);

while($row = mysqli_fetch_assoc($theloai)){
	$idTL = $row['idTL'];
?>
<li><a href="index.php?p=tintheotheloai&idTL=<?php echo $row["idTL"] ?>"><?php echo $row['TenTL'];?></a>
  <ul>
  <?php
  	$tintheotheloai = DanhSachTinTheoTheLoai($conn,$idTL);
		while($row_tintheotheloai = mysqli_fetch_assoc($tintheotheloai)){
			$idTL = $row['idTL'];
  ?>
  <li><a href="index.php?p=tintrongloai&idLT=<?php echo $row_tintheotheloai["idLT"] ?>"><?php echo $row_tintheotheloai["Ten"] ?></a></li>
  <?php
		}
  ?>
  </ul>
</li>
<?php
}
?>
</ul>
<br style="clear: left" />
</div>
