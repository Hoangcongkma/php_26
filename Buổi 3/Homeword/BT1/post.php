<?php
if(isset($_POST['number'])) 
	echo( $_POST['number']);
    echo "<br>";
if(isset($_POST['name'])) 
	echo( $_POST['name']);
    echo "<br>";
if(isset($_POST['phone'])) 
	echo( $_POST['phone']);
    echo "<br>";
if(isset($_POST['email'])) 
	echo($_POST['email']);
    echo "<br>";
if(isset($_POST['address']))
	echo($_POST['address']);
    echo "<br>";
if (isset($_POST['gender']))
	 echo "Giới Tính :";
	 echo($_POST['gender']);
?>


