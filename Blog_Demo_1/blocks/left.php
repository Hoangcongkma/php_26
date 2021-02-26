<div class="TieuDeTin-l-r">
	<h4>Tin Xem Nhiều</h4>
</div>
<div class="list-group">
  <a href="#" class="list-group-item active">
    Danh Sách Tin
  </a>
  <?php
  	$tin = TinXemNhieu($conn);
		while($row = mysqli_fetch_assoc($tin)){
  ?>
  <a href="<?php echo $row['id'];?>-<?php echo $row['TieuDe_KhongDau'];?>.html" class="list-group-item"><?php echo $row["TieuDe"] ?></a>
  <?php
		}
  ?>
</div>
