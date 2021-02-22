<?php 

/**
 * 
 */
class Controller 
{
	
	public function view($path, $data = []){
		extract($data);
		require_once('views/'.$path);
	}

	public function redirect($path){
		header("Location: " . $path);
	}

	public function model($model){
		require_once("models/$model.php");
		return new $model;
	}
}

?>