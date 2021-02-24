<?php

class EditCategory {
	public function __construct()
	{
		require_once('../../Model/admin/category.php');
		$categoryModel = new CategoryModel();
		$name = $slug = NULL;

		if (isset($_GET['categoryId'])) {
			$categoryId = $_GET['categoryId'];
			$categoryOld = $categoryModel->getCategory($categoryId);

			if (isset($_POST['editCategory'])) {
				$name = $_POST['name'];
				$slug = changeTitle($name);
				$categoryModel->editCategory($name, $slug, $categoryId);
				$_SESSION['thongbao'] = '* Thêm thành công';

				header('Location: ?controller=listCategory');
			}

			require('pages/category/edit.php');
		}
	}
}