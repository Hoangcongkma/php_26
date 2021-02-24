<?php

class EditPost {
	public function __construct()
	{
		require_once('../../Model/admin/category.php');
		require_once('../../Model/admin/post.php');

		$categoryModel = new categoryModel;
		$postModel = new PostModel;

		if (isset($_GET['postId'])) {
			$postId = $_GET['postId'];
			$categories = $categoryModel->categoryList(); /*lấy toàn bộ chuyên mục trong bảng categories*/
			$postOld = $postModel->getPost($postId);

			if (isset($_POST['editPost'])) {
				$title = $_POST['title'];
				$slug = changeTitle($title);
				$summary = $_POST['summary'];
				$content = $_POST['content'];
				$categoryId = $_POST['category_id'];
			/**
	        * Nếu không chọn ảnh thì lấy tên ảnh trong input có name là image_old
	        * Ngược lại thì lấy tên ảnh theo $slug và lưu vào Public/upload/post
	        * Tiến hành sửa bài viết bằng hàm editPost bên Model
	        * @var array
	        */
				if (isset($_FILES['image']) && $_FILES['image']['error'] > 0) {
					$image = $_POST['image_old'];
				} else {
					$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
					$image = $slug . '.' . $ext;
					move_uploaded_file($_FILES['image']['tmp_name'], '../../Public/upload/posts/' . $image);
				}

				$postModel->editPost($postId, $title, $slug, $summary, $content, $categoryId, $image);
			}

			require('pages/post/edit.php');
		}
	}
}