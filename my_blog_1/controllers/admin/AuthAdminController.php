<?php
require_once 'controllers/Controller.php';
require_once 'models/User.php';
class AuthAdminController extends Controller
{
    public function login(){
        $this->view('admin/auth/login_form.php');
    }

    public function checkLogin(){
        $userModel = new User();

        $username = $_POST['username'];
        $password = $_POST['pass'];

        $user = $userModel->getByName($username);
        if ($user) {
            if ($user['password'] == $password) {
                $_SESSION['login'] = true;
                $_SESSION['user'] = $user;
                header('Location:  index.php?mod=admin&act=index&c=home');
            }else{
                $_SESSION['login'] = false;
                echo "Sai pass";
            }
        }else {
            $_SESSION['login'] = false;
            header('Location: ?mod=admin&act=login&c=auth');
            

        }
    }

    public function logout(){
        $_SESSION['login'] = false;
        header('Location: ?mod=admin&c=auth&act=login');
    }
}


?>