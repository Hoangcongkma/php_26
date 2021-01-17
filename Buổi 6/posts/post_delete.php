<?php 
include('../helpers/query_helper.php');
$id = $_GET['id'];
$status = delete('posts',$id);
 ?>