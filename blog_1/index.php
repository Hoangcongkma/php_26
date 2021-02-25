<?php 
session_start(); 
	$mod = "home";
	$act = "index";
	$type= 'frontend';
	if(isset($_GET['mod'])){
		$mod = $_GET['mod'];
	}
	if(isset($_GET['act'])){
		$act = $_GET['act'];
	}
	if(isset($_GET['type'])){
		$type = $_GET['type'];
	}
	$class_name = ucfirst($mod). "Controller";
	$path = __DIR__ . "/controllers/".ucfirst($type).'/'. $class_name . ".php";
	if(!file_exists($path)){
		echo "File $path không tồn tại";
		exit();
	}
	require_once($path);
	$controller_obj = new $class_name();
	if (!method_exists($controller_obj, $act)) {
		echo "Method $act() không tồn tại";
		exit();
	}
	$controller_obj->$act();
	?>