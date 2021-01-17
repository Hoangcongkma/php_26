<?php 
include('../helpers/query_helper.php');
$data = $_POST;
$status = update('posts', $data);
 ?>