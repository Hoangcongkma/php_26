<?php 
// require_once('model/Post.php');
require_once('Controller.php');
class PostController extends Controller
{
	protected $model;
	public function __construct(){
		$this->model = $this->model('Post');
	}

	public function list(){
		// $model = new Post();
		$posts = $this->model->select();
		$this->view('post/list.php', ['posts' => $posts]);
	}
	public function create(){
		$this->view('post/create.php', []);
	}

	//ham xu ly tao moi
	public function store($data){
		$post = $this->model->insert($data);
		$this->redirect('?mod=post&act=list');
	}
	
	public function destroy($id){
		$this->model->delete($id);
		$this->redirect('?mod=post&act=list');
	}

	//Hàm trả về dữ liệu + view
	public function edit($id){
		$post = $model->get_data($id);
		$this->view('post/edit.php', ['post' => $post]);
	}

	public function update($id, $data){
		$post = $this->model->edit($data, $id);
		$this->redirect('?mod=post&act=list');
		
	}

	public function detail($id){
		$post = $this->model->get_data($id);
		$this->view('post/detail.php', ['post' => $post]);
	}
}


?>