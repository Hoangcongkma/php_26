<?php
	require 'View/client/layouts/header.php'; 

	if (isset($_GET['controller'])) {
		require '../../Route/admin/web.php'; /*xử lý các request trong Route/web.php*/
	} else {
		require 'View/client/pages/home.php'; /*require giao diện trang chủ*/
	}

	require 'View/client/layouts/footer.php'; /*giao diện footer*/

	$db->closeDatabase();
?>