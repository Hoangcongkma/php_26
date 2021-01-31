<?php 
require_once('Controller.php');
class  UserController extends Controller
{
	protected $model;
	public function __construct(){
		$this->model = $this->model('User');
	}

	public function list(){
		$users = $this->model->select();
		$this->view('user/list.php', ['users' => $users]);
	}
	public function create(){
		$this->view('user/create.php', []);
	}

	//ham xu ly tao moi
	public function store($data){
		$user = $this->model->insert($data);
		$this->redirect('?mod=user&act=list');
	}
	
	public function destroy($id){
		$this->model->delete($id);
		$this->redirect('?mod=user&act=list');
	}

	//Hàm trả về dữ liệu + view
	public function edit($id){
		$user = $this->model->get_data($id);
		$this->view('user/edit.php', ['user' => $user]);
	}

	public function update($id, $data){
		$user = $this->model->edit($data, $id);
		$this->redirect('?mod=user&act=list');
		
	}

	public function detail($id){
		$user = $this->model->get_data($id);
		$this->view('user/detail.php', ['user' => $user]);
	}
}


?>