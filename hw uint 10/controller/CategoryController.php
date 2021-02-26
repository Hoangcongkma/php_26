<?php 
// require_once 'model/Category.php';
require_once('Controller.php');

class CategoryController extends Controller
{
	//Khởi tạo biến model
	protected $model;

	//hàm construct tạo sẵn 1 đối tượng, sau đó các hàm sau chỉ việc dùng lại mà không cần phải khai báo ở từng hàm
	public function __construct(){
		$this->model = $this->model('Category');
	}

	public function list(){
		$categories = $this->model->select();
		// require_once('view/category/list.php');
		$this->view('category/list.php', ['categories' => $categories]);
		// $this->view('layout/master.php', ['page' => 'category.php']);

	}

	public function create(){
		// require_once('view/category/create.php');
		$this->view('category/create.php', []);
	}

	//ham xu ly tao moi
	public function store($data){
		// $model = new Category();
		$category = $this->model->insert($data);
		// header('Location: ?mod=category&act=list');
		$this->redirect('?mod=category&act=list');
	}
	
	public function destroy($id){
		// $model = new Category();
		$this->model->delete($id);
		// header('Location: ?mod=category&act=list');
		$this->redirect('?mod=category&act=list');
	}

	//Hàm trả về dữ liệu + view
	public function edit($id){
		// $model = new Category();
		$category = $this->model->get_data($id);
		// require_once('view/category/edit.php');
		$this->view('category/edit.php', ['category' => $category]);
	}

	public function update($id, $data){
		// $model = new Category();
		$category = $this->model->edit($data, $id);
		// header('Location: ?mod=category&act=list');
		$this->redirect('?mod=category&act=list');
	}

	public function detail($id){
		// $model = new Category();
		$category = $this->model->get_data($id);
		// require_once('view/category/detail.php');
		$this->view('category/detail.php', ['category' => $category]);
	}
}


 ?>