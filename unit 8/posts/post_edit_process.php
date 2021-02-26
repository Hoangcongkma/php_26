<?php 
include '../helpers/Model.php';
include_once ('Post.php');

$post_object = new Post();
$post = $post_object->updateData();
 ?>