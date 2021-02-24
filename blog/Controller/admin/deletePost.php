<?php

class DeletePost {
	public function __construct()
	{
		require_once('../../Model/admin/post.php');
		
		$postModel = new PostModel();
		
		if (isset($_GET['postId'])) {
			$postId = $_GET['postId'];
			$postModel->deletePost($postId);

			header('Location: ?controller=listPost');
		}
		require('pages/category/add.php');
	}
}