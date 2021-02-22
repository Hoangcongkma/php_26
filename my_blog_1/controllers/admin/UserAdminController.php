<?php
require_once "controllers/admin/AdminController.php";
require_once "models/User.php";
class UserAdminController extends AdminController {
	protected $model;
	protected $category_obj;

	public function __construct(){
		$this->model = new User();
		parent::__construct();
		// $this->category_obj = new Category();
		
	}

    //hiển thị danh sách
	public function index(){
		$users = $this->model->select();
		$this->view('admin/server/layout/master.php',[
			'page'=>'user/index', 'users' => $users
		]);
	}


	public function create(){
		$this->view('admin/server/layout/master.php', [
			'page' => 'user/create'
		]);
	}

	//thêm mới
	public function store($data){
		$data=$_POST;
		$post = $this->model->insert($data);
		$this->redirect('?mod=admin&c=user&act=index');
	}

	//lấy thông tin và điền vào ô
	public function edit(){
		$data = $this->model->get_data($_GET['id']);
		$this->view('admin/server/layout/master.php',[
			'page'=>'user/update', 
			'user' => $data
		]);
	}
	//chỉnh sửa
	public function update(){
		$data = $_POST;
		$id = $_POST['id'];
		$status = $this->model->edit($data, $id);
		$this->redirect('?mod=admin&c=user&act=index');
	}

	//xóa
	public function destroy(){
		$id = $_GET['id'];
		$post = $this->model->delete($id);
		$this->redirect('?mod=admin&c=user&act=index');
	}
	

}
?>