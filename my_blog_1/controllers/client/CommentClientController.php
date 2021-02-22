<?php 
require_once 'controllers/client/ClientController.php';
require_once 'models/Category.php';
require_once 'models/Post.php';
require_once 'models/User.php';
require_once 'models/Comment.php';

/**
 * 
 */
class CommentClientController extends ClientController
{
	var $comment_obj;

	function __construct()
	{
		$this->comment_obj		= new Comment();
	}

	//tạo comment
	public function createComment(){
		$data = $_POST;
		$comment = $this->comment_obj->insert($data);
		$this->redirect('?mod=client&c=post&act=index');
	}

}


 ?>