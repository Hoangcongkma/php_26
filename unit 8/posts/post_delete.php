<?php 
include '../helpers/Model.php';
include_once('Post.php');
$post_object = new Post();
$status = $post_object->deleteData();

 ?>