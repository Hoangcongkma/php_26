<!DOCTYPE html>
<html >
<head>
        <meta charset="UTF-8">
        <meta charset="utf-8">
        <title>Đăng nhập - Blog Hoàng Công Kma</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">  
        <link rel="stylesheet" href="css/login.css">
</head>

<body>
        <div class="form">
          <ul class="tab-group">
            <li class="tab active"><a href="index.php">HCKMA - Mobile Shop</a></li>
          </ul>
          <div class="tab-content">
            <h1>Welcome to my blog</h1>
            <form action="?action=loginaction" method="post">
              <div class="field-wrap">
                <input type="text" required autocomplete="off" placeholder="Tài khoản" name="username" />
              </div>
              <div class="field-wrap">
                <input type="password" required autocomplete="off" placeholder="Mật khẩu" name="password" />
              </div>
              <p  class="forgot" style="margin-bottom: 25px;"><a href="?action=register">Đăng ký</a></p>
              <p class="forgot"><a href="#">Quên mật khẩu?</a></p>
              <button class="button button-block"/>Đăng nhập</button>
            </form>
          </div><!-- tab-content -->   
        </div> <!-- /form -->
      </body>

</html>
