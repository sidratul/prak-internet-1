<?php
	$username=$_POST['username'];
	$pass= $_POST['pass'];

	$err=false;
	$pesan="";

	if(empty($username)){
		$err=true;
		$pesan=$pesan."nama tidak boleh kosong<br>";
	}else{
		if ($username!="ridho") {
			$err=true;	
			$pesan=$pesan."nama tidak cocok<br>";
		}
	}

	if (empty($pass)) {
		$err=true;
		$pesan=$pesan."password tidak boleh kosong<br>";
	}else{
		if ($pass!="password") {
			$err=true;
			$pesan=$pesan."password tidak cocok<br>";
		}
	}

	if($err==false){
		echo "berhasil login";
	}else{
		header("Location: loginform.php?pesan=$pesan<br>");	
	}
?>