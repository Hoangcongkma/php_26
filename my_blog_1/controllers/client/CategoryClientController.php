<?php 
require_once 'controllers/client/ClientController.php';
require_once 'models/Category.php';
require_once 'models/Post.php';
require_once 'models/User.php';
/**
 * 
 */
class CategoryClientController extends ClientController
{
	var $category_obj;
	var $post_obj;
	var $user_obj;

	function __construct(){
		$this->category_obj = new Category();
		$this->post_obj		= new Post();
		$this->user_obj		= new User();
	}

	public function index()
	{
		$category=$this->category_obj->select();
		$this->view('client/layout/master.php',[
			'page'=>'category', 
			'category'=>$category
		]);
	}
}
?>