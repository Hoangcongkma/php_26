<?php

class ListCategory {
	public function __construct()
	{
		require_once('../../Model/admin/category.php');
		$categoryModel = new CategoryModel();
		$categories = $categoryModel->categoryList();
		
		require('pages/category/list.php');
	}

}
