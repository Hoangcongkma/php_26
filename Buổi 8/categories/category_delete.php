<?php 
include '../helpers/Model.php';
include_once('Category.php');
$category_object = new Category();
$status = $category_object->deleteData();

 ?>