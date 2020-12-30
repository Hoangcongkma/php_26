<?php
 session_start(); // Đăng ký phiên làm việc với SESSION

     $info = array();
     $info['id'] = "id";
     $info['tenhang'] = "tenhang";
     $info['soluong'] = "soluong";
      $info['gia'] = "gia";
     

     $_SESSION['info'] = $info;   // lưu toàn bộ mảng info và session có tên info

    if(isset($_SESSION['info'])){  // Kiểm tra sự tồn tại của SESSION trước khi sử dụng
        echo "id: ".$_SESSION['infor']['id'];
        echo "ten hang: ".$_SESSION['info']['name'];
        echo "so luong: ".$_SESSION['info']['so luong'];
        echo "gia: ".$_SESSION['info']['gia'];
        header('location:basket.php');
        } ;
    //}
	//if (!isset($_SESSION['arMuaHang'][$id])) {
		//$_SESSION['arMuaHang'][$id] = array(
        //'tenhang' => $tenhang,
       // 'soluong' =>$soluong,
       // 'gia' =>$gia,
	//	);
//	}else{
		//$_SESSION['arMuaHang'][$id]['soluong'] +=$soluong;
	//}
 
?>