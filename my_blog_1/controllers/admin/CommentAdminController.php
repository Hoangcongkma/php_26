<?php 
require_once 'models/Category.php';
require_once 'models/Post.php';
require_once 'models/User.php';
require_once 'models/Comment.php';
require_once 'controllers/admin/AdminController.php';

/**
 * 
 */
class CommentAdminController extends AdminController
{
	protected $comment_obj;
	protected $post_obj;

	function __construct()
	{
		$this->comment_obj = new Comment();
		$this->post_obj = new Post();
		parent::__construct();
	}

	//hiển thị danh sách comment chưa phê duyệt 
	public function index(){
		$post = $this->post_obj->select();
		$comment = $this->comment_obj->list_request();
		$this->view('admin/server/layout/master.php',[
			'page'=>'comment/index', 
			'comments' => $comment, 
			'posts'=>$post
		]);
	}

	//phê duyệt comment
	public function action(){
		$comment = $this->comment_obj->approved($_GET['id']);
		$this->redirect('?mod=admin&c=comment&act=index');
	}

	public function actionAll(){
		$comment = $this->comment_obj->approvedALL();
		$this->redirect('?mod=admin&c=comment&act=index');
	}

	//xóa comment
	public function destroy(){
		$id = $_GET['id'];
		$comment = $this->comment_obj->delete($id);
		$this->redirect('?mod=admin&c=comment&act=index');
	}
}
 ?>