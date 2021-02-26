
<?php 
	require_once('controllers/Backend/BackendController.php');
	class DashboardController extends BackendController
	{
		public function index(){
			$this->view('backend/dashboard/index.php');
		}
	}

 ?>