<?php 
	class BaseController
	{
		public function view($path,$data = []){
			extract($data);
			require_once('views/' . $path);
		}
		public function redirect($path){
			header("Location: ".$path);
		}
	}
?>