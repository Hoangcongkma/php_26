<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách chuyên mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách chuyên mục</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <?php  
                                    if (isset($_SESSION['thongbao'])) {?>
                                        <div class="form-group alert alert-primary">
                                            <?=$_SESSION['thongbao']?>
                                            <?php unset($_SESSION['thongbao']); ?>
                                        </div>
                                    <?php }
                                ?>
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">STT</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên chuyên mục</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Sửa</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Xóa</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $stt = 0;
                                            foreach ($categories as $category) {?>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><?=++$stt?></td>
                                                    <td><?=$category['name']?></td>
                                                    <td style="text-align: center;">
                                                        <span class="badge bg-primary">
                                                            <a href="?controller=editCategory&categoryId=<?=$category['id']?>">
                                                                <ion-icon name="create-outline"></ion-icon>
                                                            </a>
                                                        </span>
                                                        
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <span class="badge bg-danger">
                                                            <a href="#">
                                                                <ion-icon name="trash-outline"></ion-icon>
                                                            </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php }
                                        ?>
                                        <?php  
                                    if (isset($_SESSION['thongbao'])) {?>
                                        <div class="form-group alert alert-primary">
                                            <?=$_SESSION['thongbao']?>
                                            <?php unset($_SESSION['thongbao']); ?>
                                        </div>
                                    <?php }
                                ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">STT</th>
                                            <th rowspan="1" colspan="1">Tên chuyên mục</th>
                                            <th rowspan="1" colspan="1">Sửa</th>
                                            <th rowspan="1" colspan="1">Xóa</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>