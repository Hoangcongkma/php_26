<?php
require_once 'controllers/Controller.php';
class AdminController extends Controller
{
    public function __construct(){
        if ($_SESSION['login'] == false) {
            header('Location: ?mod=admin&act=login&c=auth');
        }
    }
}

?>