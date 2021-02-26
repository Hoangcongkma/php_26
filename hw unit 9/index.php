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
			require_once('controller/CategoryController.php');
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
			require_once('controller/PostController.php');
			$controller_obj = new PostController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'store':
					$controller_obj->store();
					break;	
				case 'destroy':
					$controller_obj->destroy();
					break;
				case 'edit':
					$controller_obj->edit();
					break;	
				default:
					# code...
					break;
			}
			break;
		case 'user':
			require_once('controller/UserController.php');
			$controller_obj = new UserController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'store':
					$controller_obj->store();
					break;	
				case 'destroy':
					$controller_obj->destroy();
					break;
				case 'edit':
					$controller_obj->edit();
					break;	
				default:
					# code...
					break;
			break;
		
		default:
			echo "Không tồn tại module";
			break;
}

?>