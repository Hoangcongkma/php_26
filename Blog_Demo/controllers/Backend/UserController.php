<?php 
 require_once('controllers/BaseController.php');
 require_once('models/User.php');
 class UserController extends BaseController
 {
 	public function index(){
 		$user = new User();
		$users = $user->getList();
 		$this->view('backend/users/index.php',['users'=>$users]);
 	}
 	public function create(){
			$this->view('backend/users/create.php');
		}
		//Lưu trữ dữ liệu người dùng tạo ra
		public function store(){
			 $data = $_POST;
			  if (isset($_POST['upload'])) {
				   $image = $_FILES['avatar']['name'];
				}
			 $data_insert = [
		    	'id' => $data['id'],
		      	'name' => $data['name'],
		      	'email' => $data['email'],
		    	'password' => $data['password'],
		    	'avatar' => $image,
		      'created_at' => $data['created_at']
		    ];
		    $user = new User();
		    $users = $user->create($data_insert);
		    if ($users == true) {
   	 			setcookie('add_new',"Thêm mới thành công !!!", time()+2);
   			}
		    $this->redirect("index.php?type=backend&mod=user&act=index");
		}
		public function edit(){
			$id = $_GET['id'];
			$user_obj = new User();
			$user = $user_obj->find($id);
			$this->view('backend/users/edit.php',['user' => $user]);
		}
		public function update(){
			$data = $_POST;
			if (isset($_POST['upload'])) {
				if ($_FILES['avatar']['name']=='') {
					$image = $data['avatar1'];
				}
				else
				   $image = $_FILES['avatar']['name'];
				}
			$data_insert = [
				'name' => $data['name'],
				'email' => $data['email'],
				'password' => $data['password'],
				'avatar' => $image,
				'created_at' => $data['created_at']
			];
			$user = new User();
			$users = $user->fix($data_insert,$data['id']);
			if ($users == true) {
				setcookie('update',"Đã update thông tin thành công", time()+2);
			}
			$this->redirect("index.php?type=backend&mod=user&act=index");
		}
		public function detail(){
			$id = $_GET['id'];
			$user_obj = new User();
			$user = $user_obj->find($id);
			$this->view('backend/users/detail.php',['user' => $user]);
		}
		public function delte(){
			$id = $_GET['id'];
			$user_obj = new  User();
			$user = $user_obj->del($id);
			if ($user == true) {
				setcookie('delete',"Xóa một mục thành công", time()+2);
			}
			$this->redirect("index.php?type=backend&mod=user&act=index");
		}
 }
 ?>