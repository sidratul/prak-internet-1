<?php
	session_start();
	$usernames = $_POST['username'];
	$pass = $_POST['pass'];
	$remember = $_POST['remember'];

	if(empty($username)){
		header("Location: login.php?err='form tidak boleh kosong'");
	}else{
		if($remember="remember"){
			//setcookie
			setcookie("username",$username);
			setcookie("pass",$pass);	
		}

		//username
		$_SESSION['username']=$username;

		header("Location: index.php?");
	}
?>