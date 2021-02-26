<?php
	require_once("connect.php");
	class user extends connect{
		var $userid = null;
	    var $username = null;
	    var $password = null;
	    var $fullname = null;
	    var $email = null;
	    public function login($username,$password) {
	    	$sql = "SELECT * from users where username='$username' and password='$password'";
	    	return $this->getdata($sql);
	    }
	    public function checkuser($username) {
			$sql = "SELECT * FROM users WHERE username='$username'";
			return $this->getdata($sql);
		}
	}   
?>