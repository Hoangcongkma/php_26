<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thêm bài viết</h1>
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
            <form method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input type="text" required="required" name="title" class="form-control" placeholder="Tên chuyên mục">
                    </div>
                    <div class="form-group">
                        <label>Chuyên mục</label>
                      <select name="category_id" class="form-control select2">
                            <?php
                                foreach ($categories as $category) {?>
                                    <option value="<?=$category['id']?>"><?=$category['name']?></option>
                                <?php }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tóm tắt</label>
                        <textarea class="textarea" name="summary" required="required" placeholder="Place some text here"
                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea required="required" name="content" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <button type="submit" name="addCategory" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </section>
</div>