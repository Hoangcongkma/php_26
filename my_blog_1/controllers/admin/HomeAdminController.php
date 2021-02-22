<?php
require_once 'controllers/admin/AdminController.php'; 
class HomeAdminController extends AdminController
{
    public function index(){
        $this->view('admin/server/layout/master.php',[
            'page'=>'dashboard'
        ]);
    }

    
}
?>