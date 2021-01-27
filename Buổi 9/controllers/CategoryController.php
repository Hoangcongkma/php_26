<?php 
require_once('models/Category.php');
class CategoryController{
	public function list (){
		$category = new Category();
		$categories = $category ->getlist();
		require_once('views/categories/list.php');	
	}
	//hien thi ra from tao moi
	public function create(){
		require_once('views/categories/create.php');
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
	    header("Location:index.php?mod=category&act=list");

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