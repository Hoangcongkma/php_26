<!DOCTYPE html>
<html >
  <head>
          <meta charset="UTF-8">
          <title>Đăng ký - My Blog</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
          <link rel="stylesheet" href="css/login.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>

  <body>

        <div class="form">
          <ul class="tab-group">
            <li class="tab active"><a href="index.php">Hoàng Công kma</a></li>
          </ul>
          <div class="tab-content"> 
            <h1>Đăng ký</h1>
            <form action="?action=registeraction" method="post">
              <div class="top-row">
                <div class="field-wrap">
                  <input type="text" required autocomplete="off" name="username" placeholder="Tài khoản"/>
                  <span style="color: red;"></span>
                </div>
                <div class="field-wrap">
                  <input type="text"required autocomplete="off" name="name" placeholder="Họ và tên" />
                </div>
              </div>
              <div class="field-wrap">
                <input type="email"required autocomplete="off" name="email" placeholder="Email" />
              </div>
              <div class="field-wrap">
                <input type="password"required autocomplete="off" name="pass" placeholder="Mật khẩu" />
              </div>
              <button type="submit" name="submit" class="button button-block"/>Get Started</button>
            </form>
          </div><!-- tab-content -->
        </div> <!-- /form -->

  </body>


</html>
