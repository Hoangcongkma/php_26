<?php 
require_once('controller/BaseController.php');

class UserController extends BaseController {
	public function index(){
		$this->view('backend/user/index.php');
	}
}



?>