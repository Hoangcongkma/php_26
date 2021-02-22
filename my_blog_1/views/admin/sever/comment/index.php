<a href="?mod=admin&c=comment&act=actionAll" class="btn btn-primary">Duyệt tất cả</a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Tên</th>
      <th scope="col">Tên bài viết</th>
      <th scope="col">Nội dung</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Hành động</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($comments as $key => $value) { 
      foreach ($posts as $key => $value1) {
        if($value1['id']==$value['post_id']) $post=$posts[$key];
      }?>
      <tr>
        <td><?php echo $value['name'] ?></td>
        <td><?php echo $post['title'] ?></td>
        <td><?php echo $value['content'] ?></td>
        <td><?php 
              if ($value['status'] == 0) {
                echo "Chưa duyệt";
              }
         ?></td>
        <td style="width: 20%;">
          <a href="?mod=admin&act=action&c=comment&id=<?php echo $value['id'];?>" class="btn btn-success">Phê duyệt</a>
          <a href="?mod=admin&act=destroy&c=post&id=<?php echo $value['id'];?>" class="btn btn-danger">Xóa</a>
        </td>
      </tr>
    <?php } ?>
    
    
    
  </tbody>
</table>