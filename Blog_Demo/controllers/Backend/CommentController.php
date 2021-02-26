<?php 
 require_once('controllers/BaseController.php');
 require_once('models/Comment.php');
 class CommentController extends BaseController
 {
 	public function index(){
 		$comment = new Comment();
		$comments = $comment->getList();
 		$this->view('backend/comment.php',['comments' => $comments]);
 	}
 	public function store(){
			 $data = $_POST;
			 $data_insert = [
    		'id' => $data['id'],
	    	'parent_id' => $data['parent_id'],
	    	'user_name' => $data['user_name'],
	    	'email' => $data['email'],
	        'content' => $data['content'],
	        'created_at' => $data['created_at'],
	        'post_id' => $data['post_id']
    		];
		    $comment = new Comment();
		    $comments = $comment->create($data_insert);
		    $this->redirect('index.php?type=frontend&mod=post&act=detail&id='.$data['post_id']);
		}
	public function delte(){
			$id = $_GET['id'];
			$comment_obj = new Comment();
			$comment = $comment_obj->del($id);
			if ($comment== true) {
				setcookie('delete',"Xóa một mục thành công", time()+2);
			}
			$this->redirect('index.php?type=backend&mod=comment&act=index');
		}	
 }
 ?>