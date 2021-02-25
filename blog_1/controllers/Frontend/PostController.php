<?php 
require_once('controllers/BaseController.php');
require_once('models/Post.php');
require_once('models/Comment.php');
require_once('models/Category.php');
require_once('models/User.php');
class PostController extends BaseController
{
	public function detail(){
		$id = $_GET['id'];
		$post = new Post();
		$posts = $post->find($id);
		$category = new Category();
		$categories = $category->getList();
		$user = new User();
		$users = $user->getList();
		$comment = new Comment();
		$comments = $comment->find($id);  
		$this->view('frontend/posts/detail.php',['posts' => $posts, 'users' => $users, 'categories' => $categories, 'comments' => $comments]);
	}
	public function search(){
			if (isset($_REQUEST['ok'])) 
       			 {
            // Gán hàm addslashes để chống sql injection
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
           		if (empty(addslashes($_POST['key']))) {
                	echo "Yeu cau nhap du lieu vao o trong";
            	} 
            	else{
            		$post = new Post();
					$posts = $post->getKeyPost($_POST['key']);
					$category = new Category();
					$categories = $category->getList();
					$user = new User();
					$users = $user->getList();
					$this->view('frontend/posts/postsKey.php',['posts' => $posts,'users' => $users, 'categories' => $categories]);

            	}
            }	
		}
}
?>