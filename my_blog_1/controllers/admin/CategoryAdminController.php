<?php
require_once "controllers/admin/AdminController.php";
require_once 'models/Category.php';
class CategoryAdminController extends AdminController {
	protected $model;
	public function __construct(){
		$this->model = new Category();
		parent::__construct();
	}

     	//hiển thị toàn bộ danh mục
	public function index() {
		$categories = $this->model->select();
		$this->view('admin/server/layout/master.php',[
			'page'=>'category/index', 
			'categories' => $categories
		]);
	}
}
?>