<a href="?mod=admin&c=post&act=create" class="btn btn-primary">Thêm danh mục mới</a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên</th>
      <th scope="col">Mô tả</th>
      <th scope="col">Ảnh bìa</th>
      <th scope="col">Hành động</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($categories as $key => $value) { ?>
    <tr>
      <th scope="row"><?php echo $value['id'] ?></th>
      <td><a href=""><?php echo $value['name'] ?></a></td>
      <td><?php echo $value['description'] ?></td>
      <td><img src="<?php echo $value['thumbnail'] ?>" width=200></td>
      <td style="width: 20%;">
        <a href="?mod=admin&act=edit&c=user&id=<?php echo $value['id'];?>" class="btn btn-success">Edit</a>
        <a href="?mod=admin&act=destroy&c=user&id=<?php echo $value['id'];?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>