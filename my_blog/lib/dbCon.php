<!-- config code -->
<?php 
$host = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($host,$user,$password);
$conn = mysqli_connect('localhost', 'root','');
mysqli_select_db($conn,"my_blog");
mysqli_set_charset( $conn, 'utf8');
?>