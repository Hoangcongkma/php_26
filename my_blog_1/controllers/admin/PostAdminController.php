<?php
require_once 'controllers/admin/AdminController.php';
require_once 'controllers/Controller.php';
require_once 'models/Post.php';
require_once 'models/Category.php';


class PostAdminController extends AdminController
{
	protected $model;
	protected $category_obj;

	public function __construct(){
		$this->model = new Post();
		$this->category_obj = new Category();
		parent::__construct();
		
	}

    //hiển thị danh sách
	public function index(){
		$posts = $this->model->listNew();
		if(isset($_GET['i'])){
			$i=$_GET['i'];
		}else{
			$i=1;
		}
		$post_page=$this->model->paginite($limit=5,$page=$i);
		$this->view('admin/server/layout/master.php',[
			'page'=>'post/index', 
			'posts' => $posts,
			'post_page'=> $post_page
		]);
	}


	public function create(){
		$category = $this->category_obj->select();
		$this->view('admin/server/layout/master.php', [
			'page' => 'post/create', 
			'category' => $category
		]);
	}

	//thêm mới
	public function store(){
		$data=$_POST;
		$post = $this->model->insert($data);
		$this->redirect('?mod=admin&c=post&act=index');
	}

	//lấy thông tin và điền vào ô
	public function get(){
		$category = $this->category_obj->select();
		$data = $this->model->get_data($_GET['id']);
		$this->view('admin/server/layout/master.php',[
			'page'=>'post/update', 
			'data' => $data,
			'category' => $category
		]);
	}
	//chỉnh sửa
	public function update(){
		$data = $_POST;
		$id = $_POST['id'];
		$status = $this->model->edit($data, $id);
		$this->redirect('?mod=admin&c=post&act=index');

	}

	//xóa
	public function destroy(){
		$id = $_GET['id'];
		$post = $this->model->delete($id);
		$this->redirect('?mod=admin&c=post&act=index');
	}
}


?>