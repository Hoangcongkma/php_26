<div class="TieuDeTin-l-r">
	<h4>Tin Nổi Bật</h4>
</div>
<div class="list-group">
  <a href="#" class="list-group-item active">
    Danh Sách Tin
  </a>
  <?php
   $tin =tintuc($conn);
   	while($row_tin= mysqli_fetch_assoc($tin)){
  ?>
  <a href="index.php?p=chitiettin&id=<?php echo $row_tin['id'];?>" class="list-group-item"><?php echo $row_tin["TieuDe"] ?></a>
  <?php
	}
  ?>
</div>