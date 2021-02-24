<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Đăng ký</title>
<link rel="stylesheet" type="text/css" href="layout.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<script src="../bootstrap/js/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="../css/cssdangky.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container"> 
 <h1 class="text-center">Đăng ký thành viên</h1> 
 <div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4"> 
   <legend><a href="#"><i class="glyphicon glyphicon-globe"></i></a> Đăng ký thành viên!
   </legend> 
   <form action="#" method="post" class="form" role="form">     
        <input class="form-control" name="name" placeholder="Họ tên" type="text">
    	<input class="form-control" name="Username" placeholder="Username" type="text">
        <input class="form-control" name="password" placeholder="Mật khẩu" type="password">
        <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password">
        <label for=""> Ngày sinh</label> 
    <div class="row"> 
     <div class="col-xs-4 col-md-4">
         <select class="form-control">
         	<option value="<?php for($x=1 ; $x<31; $x++)?>"> 
             <?php echo $x?>
             
            </option>
         </select> 
     </div> 
     <div class="col-xs-4 col-md-4">
         <select class="form-control">
         	<option value="Month">Tháng</option>
         </select> 
     </div> 
     <div class="col-xs-4 col-md-4">
      <select class="form-control">
      	<option value="Year">Năm</option></select> 
     </div> 
    </div>
    	<label class="radio-inline">
    	<input name="Gender" id="inlineCheckbox1" value="male" type="radio">Nam </label>
        <label class="radio-inline">
        <input name="Gender" id="inlineCheckbox2" value="female" type="radio">Nữ </label> 
    <br> 
    <br> 
    <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button> 
   


   </form> 
  </div> 
 </div>
</div>
</body>
</html>