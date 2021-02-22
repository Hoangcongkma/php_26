<a href="?mod=admin&c=user&act=create" class="btn btn-primary">Thêm thành viên mới</a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Họ tên</th>
      <th scope="col">User name</th>
      <th scope="col">Email</th>
      <th scope="col">Avatar</th>
      <th scope="col">Hành động</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $key => $value) { ?>
      <tr>
        <th scope="row"><?php echo $value['id'] ?></th>
        <td><a href=""><?php echo $value['name'] ?></a></td>
        <td><?php echo $value['user_name'] ?></td>
        <td><?php echo $value['email'] ?></td>
        <td><img src="<?php echo $value['email'] ?>" width=200></td>
        <td style="width: 20%;">
          <a href="?mod=admin&act=edit&c=user&id=<?php echo $value['id'];?>" class="btn btn-success">Chỉnh sửa</a>
          <a href="?mod=admin&act=destroy&c=user&id=<?php echo $value['id'];?>" class="btn btn-danger">Xóa</a>
        </td>
      </tr>
    <?php } ?>
    
  </tbody>
</table>