<?php 
require_once('models/Category.php');
require_once('controllers/BaseController.php');
class CategoryController extends BaseController {
	public function list(){
		$category = new Category();
		$categories = $category ->getlist();
		// require_once('views/categories/list.php');	
		$this->view('categories/list.php',[
			'categories'=>$categories
	]);
	}
	//hien thi ra from tao moi
	public function create(){
		$this->view('categories/create.php');
		// require_once('views/categories/create.php');
	}

	//Luu tru du lieu nguoi dung tao ra
	public function store (){

		 $data = $_POST;
		    $data_insert = [
		      'id' => $data['id'],
		      'name' => $data['name'],
		      'parent_id' => $data['parent_id'],
		      'thumbnail' => $data['thumbnail'],
		      'slug' => $data['slug'],
		      'description' => $data['description'],
		      'created_at' => $data['created_at']
    		];
    	$category = new Category();
	    $categories = $category->create($data_insert);
	    // header("Location:index.php?mod=category&act=list");
	    $this->redirect("index.php?mod=category&act=list");

	}
	public function edit(){
		$id =$_GET['id'];
		$category_obj = new Category();
		$category = $category_obj->find($id);
		require_once('views/categories/edit.php');
	}
	public function update(){

	}
}

?>