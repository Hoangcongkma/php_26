<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sửa bài viết</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input value="<?=$postOld['title']?>" type="text" required="required" name="title" class="form-control" placeholder="Tên chuyên mục">
                    </div>
                    <div class="form-group">
                        <label>Chuyên mục</label>
                        <select name="category_id" class="form-control select2">
                            <?php  
                                foreach ($categories as $category) {?>
                                    <option <?php if ($category['id'] == $postOld['category_id']) {echo "selected";} ?> value="<?=$category['id']?>">
                                        <?=$category['name']?>
                                    </option>
                                <?php }
                            ?>
                            <option>Thể thao</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ảnh cũ</label><br>
                        <img width="200px" src="../../Public/upload/posts/<?=$postOld['image']?>">
                        <input type="hidden" value="<?=$postOld['image']?>" name="iamge_old">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Chọn ảnh</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Tóm tắt</label>
                    <textarea class="textarea" name="summary" required="required" placeholder="Place some text here"
                    style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$postOld['summary']?></textarea>
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea required="required" name="content" class="textarea" placeholder="Place some text here"
                    style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$postOld['content']?></textarea>
                </div>
                <button type="submit" name="editPost" class="btn btn-primary">Hoàn thành</button>
            </div>
        </form>
    </div>
</section>
</div>