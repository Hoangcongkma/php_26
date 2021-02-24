<?php

class AddPost
{
	public function __construct()
	{
		require_once('../../Model/admin/category.php');
		$categoryModel = new CategoryModel();
		$postModel = new PostModel();
		$categories = $categoryModel->categoryList(); /*lấy tất cả chuyên mục*/

		if (isset($_POST['addPost'])) {
			$title = $_POST['title'];
			$slug = changeTitle($title);
			$summary = $_POST['summary'];
			$content = $_POST['content'];
			$userId = $_SESSION['useradmin'];
			$categoryId = $_POST['category_id'],
			$date = date('Y-m-d');

			$postModel->addPost($title, $slug, $summary, $content, $userId, $categoryId, $date);
		}

		require('pages/post/add.php');
	}
}