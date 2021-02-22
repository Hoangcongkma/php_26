<a href="?mod=admin&c=post&act=create" class="btn btn-primary">Thêm bài viết mới</a>
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
    <?php foreach ($post_page as $key => $value) { ?>
      <tr>
        <th scope="row"><?php echo $value['id'] ?></th>
        <td><a href="?mod=client&act=detail&c=post&id=<?php echo $value['id']?>" target="_blank"><?php echo $value['title'] ?></a></td>
        <td><?php echo $value['description'] ?></td>
        <td><img src="<?php echo $value['thumbnail'] ?>" width=200></td>
        <td style="width: 20%;">
          <a href="?mod=admin&act=get&c=post&id=<?php echo $value['id'];?>" class="btn btn-success">Chỉnh sửa</a>
          <a href="?mod=admin&act=destroy&c=post&id=<?php echo $value['id'];?>" class="btn btn-danger">Xóa</a>
        </td>
      </tr>
    <?php } ?>
    
    <div class="row mt-5">
      <div class="col-md-12 text-center">
        <nav aria-label="Page navigation" class="text-center">
          <ul class="pagination">
            <ul style="list-style: none; display: inline-block;">
              <?php for($i=1;$i<=($_SESSION['total']/6)+1;$i++){ ?>
                <li style="display: inline-block;" class="mr-3"><a href="?mod=admin&c=post&act=index&i=<?= $i?>"><?= $i?></a></li>
              <?php } ?>
            </ul>
          </ul>
        </nav>
      </div>
    </div>
    
  </tbody>
</table>
© 2021 GitHub, Inc.