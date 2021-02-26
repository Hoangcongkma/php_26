<?php  
	include '../model/connect.php';
	include '../model/m_product.php';
    include '../model/user.php';
    include '../model/cart.php';
    include '../model/order.php';
	// Khởi tạo session
    session_start();

    // Tạo mảng thông tin về giỏ hàng
    if(!isset($_SESSION['cart']))
    $_SESSION['cart'] = array();
    if(isset($_GET["action"]))
        $action=$_GET["action"]; 
    elseif (isset($_POST['action'])){
        $action=$_POST["action"];
    }
    else $action="home";
     
    //Xóa dữ liệu của biến Messages
    unset($_SESSION['messages']);
    switch($action) {
        case 'home':
            include("../view/home.php");
            break;
        case 'productdetail':
            include("../view/productdetail.php");
            break;
        case 'login':
            include '../view/login.php';
            break;
        case 'loginaction':
            if(isset($_SESSION['admin']) || isset($_SESSION['adminh'])){
                include '../view/home.php';
            }else{
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $u = new user();
                $us = $u->login($user,md5($pass));
                if (!empty($us)) {
                    $_SESSION['admin'] = $us[0];
                    $_SESSION['adminh'] = $us[1];
                    include '../view/home.php';
                } else {
                    echo '<script> alert("Sai user hoặc password");</script>';
                    include '../view/login.php';
                }
            }
            break;
        case 'logout': 
            if(isset($_SESSION['admin']) || isset($_SESSION['adminh'])){
                $_SESSION = array();
                session_destroy();
                include '../view/home.php';
            }else {
                include '../view/home.php';
            }
            break;
        case 'register':
            include '../view/register.php';
            break;
        case 'registeraction':
            if(isset($_SESSION['admin']) || isset($_SESSION['adminh'])) {
                include '../view/home.php';
            }else {
                $username = $_POST['username'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = md5($_POST['pass']);
                $db = new user();
                $check = $db->checkuser($username);
                if(empty($check)){
                    $query = "INSERT INTO users (userid,username,fullname,email,password) VALUES ('','$username','$name','$email','$password')";
                    $db->exec($query);
                    $_SESSION['admin']= $name;
                    $_SESSION['adminh']= $name;
                    include("../view/home.php");
                    echo "<script>alert('Đăng ký thành công');</script>";
                }else {
                    echo "<script>alert('Username bạn chọn đã tồn tại vui lòng chọn username khác !');</script>";
                    include '../view/register.php';
                }
            }
            break;
        case 'productbrand':
            include("../view/product.php");
            break;
        case 'addproduct':
            if(isset($_SESSION['admin']) || isset($_SESSION['adminh'])){
                pay($_GET['id'],'1');
                include "../view/home.php";
                echo "<script>alert('Đã thêm sản phẩm vào giỏ');</script>";

            }else {
                echo "<script>alert('Bạn phải đăng nhập để thực hiện chức năng này');</script>";
                include "../view/login.php";
            }
            break;
        case 'pay':
            if(isset($_SESSION['admin']) || isset($_SESSION['adminh'])){
                if (!isset($_POST['productid'])) {
                    $_POST['productid']=null;
                }else{
                    pay($_POST['productid'],'1');
                }
                include "../view/cartview.php";
            }else {
                echo "<script>alert('Bạn phải đăng nhập để thực hiện chức năng này');</script>";
                include "../view/login.php";
            }
            break;
        case 'delete_cart':
            unset($_SESSION['cart'][$_GET['id']]);
            include '../view/cartview.php';
            break;
        case 'update_cart':
            $new_list = $_POST['newqty'];
            foreach ($new_list as $key => $qty) {
                if ($_SESSION['cart'][$key] != $qty) {
                    update_item($key, $qty);
                }
            }
            include '../view/cartview.php';
            break;
        case 'order':
            $o = new order();
            $orderId = $o->CreateOder($_SESSION['admin']);
            $_SESSION['order_id'] = $orderId;
            if (!($_SESSION['cart'])==null) {
                include '../view/order.php';
                $total = 0;
                foreach ($_SESSION['cart'] as $key => $item) {
                    $o->insertOderDetail($orderId, $key, $item['name'],$item['price'], $item['qty'], $item['total']);
                    $total+=$item['total'];
                }
                $o->updateOderTotal($orderId, $total);
                unset($_SESSION['cart']);
            }else {
                include '../view/home.php';
                echo "<script>alert('Vui lòng chọn sản phẩm rồi mới thanh toán');</script>";
            }
            break;
        case 'admin':
            if ($_SESSION['admin']==1) {
                include '../view/admin/admin.php';
            }else {
                include '../view/home.php';
            }
            break;
        case 'adproduct':
            include '../view/admin/ad-product.php';
            break;
        case 'admember':
            include '../view/admin/ad-member.php';
            break;
        case 'editproduct':
            include '../view/admin/editproduct.php';
            break;
        case 'editactive':
            $name = $_POST['name'];
            $price = $_POST['price'];
            $screen = $_POST['screen'];
            $camera = $_POST['camera'];
            $pin = $_POST['pin'];
            $os = $_POST['os'];
            $z = new m_product();
            $hinh = $z->get_productId($_GET['id']);
            $img = $hinh['product_img'];
            $id = $hinh['product_id'];
            $brandid = $hinh['product_brand_id'];
            $update = $z->update_product($id,$name,$price,$img,$screen,$camera,$pin,$os,$brandid);
            echo "<script>alert('Sửa sản phẩm thành công!');</script>";
            include '../view/admin/ad-product.php';
            break;
        case 'deleteproduct':
            $d = new m_product();
            $dele = $d->delete_product($_GET['id']);
            include '../view/admin/ad-product.php';
            echo "<script>alert('Xóa thành công!');</script>";
            break;
        case 'adminaddproduct':
            include '../view/admin/addproduct.php';
            break;
        case 'adminadd':
            $idpro = rand();
            $name = $_POST['name'];
            $img = $_FILES["img"]["name"];
            move_uploaded_file($_FILES["img"]["tmp_name"],"images/product/" . $_FILES["img"]["name"]);
            $price = $_POST['price'];
            $screen = $_POST['screen'];
            $camera = $_POST['camera'];
            $pin = $_POST['pin'];
            $os = $_POST['os'];
            $brand = $_POST['brand'];
            $a = new m_product();
            $add = $a->add_product($idpro,$name,$price,$img,$screen,$camera,$pin,$os,$brand);
            include '../view/admin/ad-product.php';
            echo "<script>alert('Thêm sản phẩm thành công');</script>";
            break;
        
    }
?>