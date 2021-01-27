<?php 	
$mod = "mode";
$act = "index";
if(isset($_GET['mod'])){
 		$mod = $_GET['mod'];
	}
if(isset($_GET['act'])){
			$act = $_GET['act'];
	}
switch ($mod) {
		case 'categories':
			require_once('controllers/CategoryController.php');
			$controller_obj = new CategoryController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'create':
		    		$controller_obj->create();
					break;
				case 'store':
				    $controller_obj->store();
					break;
				case 'edit':
				    $controller_obj->edit();
					break;

				default:
					echo "<br> Không tồn tại chức năng";
					break;
			}
			# code...
			break;
		case 'post':
			echo "Ban ban vao chuc nang quan ly bài viết";
			# code...
			break;
		case 'user':
			echo "Ban ban vao chuc nang quan ly nhân viên";
			# code...
			break;
		
		default:
			echo "Không tồn tại module";
			break;
}

?>