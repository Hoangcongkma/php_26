<?php 
require_once 'controllers/client/ClientController.php';
require_once 'models/Category.php';
require_once 'models/Post.php';
require_once 'models/User.php';
require_once 'models/Comment.php';
/**
 * 
 */
class PostClientController extends ClientController
{
	var $category_obj;
	var $post_obj;
	var $user_obj;
	var $comment_obj;

	function __construct(){
		$this->category_obj = new Category();
		$this->post_obj		= new Post();
		$this->user_obj		= new User();
		$this->comment_obj		= new Comment();
	}

	//lấy toàn bộ bài viết
	public function index()
	{
		$post = $this->post_obj->getAll();
		if(isset($_GET['i'])){
			$i = $_GET['i'];
		}else{
			$i = 1;
		}
		$post_page = $this->post_obj->paginite($limit=6,$page=$i);
		$this->view('client/layout/master.php',[
			'page'=>'post', 
			'posts'=>$post,
			'post_page'=> $post_page
		]);
	}

	//lấy bài viết theo danh mục
	public function list()
	{
		$id = $_GET['id'];
		$posts = $this->post_obj->listByCategory($id);
		$this->view('client/layout/master.php',[
			'page'=>'post', 
			'posts'=>$posts
		]);
	}

	//xem bài viết
	public function detail(){
		$id = $_GET['id'];
		$comment = $this->comment_obj->select();
		$post = $this->post_obj->getPost($id);
		$new = $this->post_obj->getNew($limit=3);
		$this->view('client/layout/master.php',[
			'page'=>'single',
			'post' => $post, 
			'new' =>$new, 
			'comment'=>$comment
		]);
	}
	

}
?>