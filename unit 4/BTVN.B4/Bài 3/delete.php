<?php 
session_start();
foreach ($_SESSION['document'] as $key => $value) {
    if ($_GET['id'] == $value['name']) {
        unset($_SESSION['document'][$key]);
    }
}
header('Location:document-list.php');
// print_r($_SESSION['document']);
 ?>