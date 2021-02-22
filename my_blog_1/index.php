<?php

    define('URL_TEMPLATE_CLIENT','http://php25.com/Project/public/client/');
    define('URL_TEMPLATE_ADMIN','http://php25.com/Project/public/admin/');

    session_start();
    class App
    {
        private $mod    = 'client';
        private $c      = 'home';
        private $act    = 'index';
        private $params = [];

        public function __construct()
        {
            //Lấy các giá trị trên url
            if( isset($_GET['mod']))
                $this->mod = $_GET['mod'];

            if(isset($_GET['act']))
                $this->act = $_GET['act'];

            if(isset($_GET['c']))
                $this->c = $_GET['c'];


            $this->params['slug']   = isset($_GET['slug']) ? $_GET['slug']:[];
            $this->params['id']     = isset($_GET['id']) ? $_GET['id']:[];
            $data[]                 = $_POST;
            // $data[]                 = $_FILE;
            $this->params['data']   = $data;
        }

        public function action()
        {

            $class  = ucfirst($this->c) . ucfirst($this->mod) . 'Controller';
            $path   = "controllers/" . $this->mod . "/" . $class . ".php";

            if(!file_exists($path))
            {
                return false;
            }


            require_once $path;
            
            $controller_obj = new $class();

            call_user_func_array([$controller_obj,$this->act],$this->params);
        }
    }

    $app = new App();

    $app->action();
?>