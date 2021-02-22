<?php
require_once 'controllers/Controller.php';
require_once 'models/Category.php';
class ClientController extends Controller 
{
	var $model;
    public function getClientMenu(){   

        $categories = new Category();
        return $categories->select();
    }

    public function view($path, $data = []){
        
        $categories = $this->getClientMenu();
        extract($data);
        require_once "views/" . $path;
    }

    



}
?>