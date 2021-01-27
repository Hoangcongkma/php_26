<?php 
require_once 'model/Category.php';

class CategoryController
{
	public function list(){
		$model = new Category();
		$categories = $model->getAll();
		require_once('view/category/list.php');

	}

	public function create(){
		require_once('view/category/create.php');
	}

	//ham xu ly tao moi
	public function store($data){
		$model = new Category();
		$category = $model->addNew($data);
		header('Location: ?mod=category&act=list');
	}
	
	public function destroy($id){
		$model = new Category();
		$model->deleteCategory($id);
		header('Location: ?mod=category&act=list');
	}

	//Hàm trả về dữ liệu + view
	public function edit($id){
		$model = new Category();
		$category = $model->getData($id);
		require_once('view/category/edit.php');
	}

	public function update($data, $id){
		$model = new Category();
		$category = $model->editData($id, $data);
		header('Location: ?mod=category&act=list');
	}

	public function detail($id){
		$model = new Category();
		$category = $model->getData($id);
		require_once('view/category/detail.php');
	}
}


 ?>