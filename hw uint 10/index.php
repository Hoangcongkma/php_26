<?php 
// define('URL', 'http://php25.com/mvc/public');
$mod = $_GET['mod'];
$act = $_GET['act'];
$params =isset($_GET['id']) ? [$_GET['id']] : [];
// include_once('controller/CategoryController.php');
// include_once('controller/PostController.php');

$class = ucfirst($mod)."Controller";
$path = "controller/$class.php";

require_once($path);

$controller_obj = new $class();
$data = $_POST;
$params[] = $data;
call_user_func_array([$controller_obj,$act],$params);

 ?>