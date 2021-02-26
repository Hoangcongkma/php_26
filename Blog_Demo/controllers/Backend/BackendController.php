<?php 
	require_once('controllers/BaseController.php'); 
	class BackendController extends BaseController
	{
		
		function __construct()
		{
			if (!$_SESSION['login']) {
				$this->redirect('index.php?type=backend&mod=auth&act=login');
			}
		}
	}
?>