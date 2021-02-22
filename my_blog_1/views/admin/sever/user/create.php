<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Thêm mới thành viên</h4>
                </div>
                <div class="card-body">
                  <form action="?mod=admin&act=store&c=user" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Họ tên</label>
                          <input type="text" class="form-control" name="name">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control" name="email">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tên đăng nhập</label>
                          <input type="text" class="form-control" name="user_name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mật khẩu</label>
                          <input type="password" class="form-control" name="password">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ảnh đại diện</label>
                          <input type="text" class="form-control" name="avatar">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Thêm mới</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>