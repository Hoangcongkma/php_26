<?php
if (isset($_COOKIE['msg'])) {
	echo $_COOKIE['msg'];
}else{
	echo "Không tồn tại";
} 
?>