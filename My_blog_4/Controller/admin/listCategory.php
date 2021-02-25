<?php

class ListPost {
	public function __construct()
	{
		require_once('../../Model/admin/post.php');
		$postModel = new PostModel;
		$posts = $postModel->postList();

		require('pages/post/list.php');
	}
}