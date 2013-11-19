<?php
	$a = $_GET['nama'];
	echo "pass : ".$_GET['pass']."<br>";
	
	$b = md5($_GET['pass']);

	echo "<h2>Selamat Datang ".$a."</h2>";
	echo "Password anda :".$b;
?>