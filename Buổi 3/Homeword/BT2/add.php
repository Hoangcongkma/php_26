<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <form action="add_process.php" method="POST" role="form">
        <legend>Nhập thông tin sinh viên</legend>

        <div class="form-group">
          <label for="">Mã Sinh Viên</label>
          <input type="text" class="form-control" id="" placeholder="Nhập msv" name="id">
        </div>

        <div class="form-group">
          <label for="">Họ và tên</label>
          <input type="text" class="form-control" id="" placeholder="Nhập Họ và tên" name="username">
        </div>  
        <div class="form-group">
          <label for="">Số Điện Thoại</label>
          <input type="text" class="form-control" id="" placeholder="Nhập sđt" name="Number">
        </div>  
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" class="form-control" id="" placeholder="Nhập Email" name="email">
        </div>  
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
               Nam
              </label>
            </div>
            <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
               Nữ
              </label>
            </div>
            <div class="form-group">
             <label for="">Địa chỉ</label>
             <input type="text" class="form-control" id="" placeholder="Nhập vào Địa chỉ" name="dc">
             </div>  
             <button type="submit" class="btn btn-primary">Lưu Thông Tin</button>
         </form>
     </div>
  </body>
</html>