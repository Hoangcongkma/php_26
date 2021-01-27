<?php 
require_once('model/Post.php');
class PostController
{
	public function list(){
		$model = new Post();
		$posts = $model->getAll();
		require_once('view/post/list.php');
	}
	public function create(){
		require_once('view/post/create.php');
	}

	//ham xu ly tao moi
	public function store($data){
		$model = new Post();
		$category = $model->addNew($data);
		header('Location: ?mod=post&act=list');
	}
	
	public function destroy($id){
		$model = new Post();
		$model->deleteCategory($id);
		header('Location: ?mod=post&act=list');
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