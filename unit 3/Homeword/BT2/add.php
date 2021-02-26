<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <form action="add_process.php" method="POST" role="form" class="was-validated">
      <legend class="text-center">POST Method</legend>
      <hr>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="code">Mã sinh viên</label>
          <input type="text" class="form-control is-invalid" id="code" name="code" placeholder="Nhập mã sinh viên" required>
          
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="">Họ và tên</label>
          <input type="text" class="form-control" id="" name="name" placeholder="Nhập họ tên" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="">Số điện thoại</label>
          <input type="text" class="form-control" id="" name="phone" placeholder="Nhập số điện thoại" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="">Email</label>
          <input type="text" class="form-control" id="" name="email" placeholder="Nhập Email" required>
        </div>
      </div>
      <div class="form-row" style="margin-bottom: 1rem;">
        <label class="col-md-12">Giới tính</label>
        <div class=" custom-control custom-radio col-md-1" style="margin-left: 20px;">
          <input type="radio" class="custom-control-input" id="male" name="gender" value="Nam" required>
          <label for="male" class="custom-control-label">Nam</label>
        </div>
        <div class=" custom-control custom-radio col-md-1">
          <input type="radio" class="custom-control-input" id="female" name="gender" value="Nữ" required>
          <label for="female" class="custom-control-label">Nữ</label>
        </div>
        <div class="invalid-feedback">More example invalid feedback text</div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="">Địa chỉ</label>
          <input type="text" class="form-control" id="" name="address" placeholder="Nhập địa chỉ" required>
        </div>
      </div>
      <div class="form-row">
        <button type="submit" class="btn btn-primary">Lưu thông tin</button>
      </div>
    </form>
  </div>
</body>
</html>