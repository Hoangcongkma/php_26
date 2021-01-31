<?php 
require_once('models/User.php');
require_once('controllers/BaseController.php');
class AuthController extends BaseController{
	public function login(){
		$this->view('auth/login.php');
	}
		public function handle(){
			$username = $_POST['user'];
			$pwd = $_POST['pwd'];
			echo $username . '-' .$pwd;
			$user_model = new User();
			$check =  $user_model->check($username, $pwd);
			if ($check) {
			$_SESSION['Login']= true;
				echo 'Đã đang nhập thành công';
			}else{
				echo 'Đăng nhập thất bại , kiểm tra lại thông tin .';
			
		}
	}


}




?>