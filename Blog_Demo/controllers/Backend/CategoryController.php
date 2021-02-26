<?php 
 require_once('controllers/BaseController.php');
 require_once('models/Category.php');
 class CategoryController extends BaseController
 {
 	public function index(){
 		$category = new Category();
		$categories = $category->getList();
 		$this->view('backend/categories/index.php',['categories' => $categories]);
 	}
 	public function detail(){
 		$id = $_GET['id'];
 		$category = new Category();
		$categories = $category->find($id);
 		$this->view('backend/categories/detail.php',['categories' => $categories]);
 	}
 	public function create(){
 		$this->view('backend/categories/create.php');
 	}
 	public function store(){
			 $data = $_POST;
				  if (isset($_POST['upload'])) {
				    $image = $_FILES['thumbnail']['name'];
				  }
			 $data_insert = [
    		'id' => $data['id'],
	      	'name' => $data['name'],
	    	'parent_id' => $data['parent_id'],
	    	'thumbnail' => $image,
	    	'slug' => $data['slug'],
	        'description' => $data['description'],
	        'created_at' => $data['created_at']
    		];
		    $category = new Category();
		    $categories = $category->create($data_insert);
		    if ($categories == true) {
   	 			setcookie('add_new',"Thêm mới thành công !!!", time()+2);
   			}
		    $this->redirect('index.php?type=backend&mod=category&act=index');
		}
	public function edit(){
			$id = $_GET['id'];
			$category_obj = new Category();
			$category = $category_obj->find($id);
			$this->view('backend/categories/edit.php',['category' => $category]);
		}
	public function update(){
			$data = $_POST;
			if (isset($_POST['upload'])) {
				if ($_FILES['thumbnail']['name']=='') {
					$image = $data['thumbnail1'];
				}
				else
				   $image = $_FILES['thumbnail']['name'];
				}
			$data_insert = [
			'name' => $data['name'],
			'parent_id' => $data['parent_id'],
			'thumbnail' => $image,
			'slug' => $data['slug'],
			'description' => $data['description'],
			'created_at' => $data['created_at']
			];
			$category = new Category();
			$categories = $category->fix($data_insert,$data['id']);
			if ($categories == true) {
				setcookie('update',"Đã update thông tin thành công", time()+2);
			}
			$this->redirect('index.php?type=backend&mod=category&act=index');
		}
	public function delte(){
			$id = $_GET['id'];
			$category_obj = new Category();
			$category = $category_obj->del($id);
			if ($category == true) {
				setcookie('delete',"Xóa một mục thành công", time()+2);
			}
			$this->redirect('index.php?type=backend&mod=category&act=index');
		}	
 }
 ?>