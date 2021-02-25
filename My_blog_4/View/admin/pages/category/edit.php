<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sửa chuyên mục</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Chuyên mục</a></li>
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
                        <label>Tên chuyên mục</label>
                        <input type="text" value="<?=$categoryOld['name']?>" name="name" class="form-control" placeholder="Tên chuyên mục">
                    </div>
                    <button type="submit" name="editCategory" class="btn btn-primary">Hoàn thành</button>
                </div>
            </form>
        </div>
    </section>
</div>