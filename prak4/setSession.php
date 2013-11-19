<?php
	//file simpan dengan nama setSession.php

	session_start();
	$nama = "budi";
	$_SESSION['nama']=$nama;
	$_SESSION['pass']="123456";

	echo $nama;

	echo "<br><a href='hal2.php'>ke Halaman berikutnya</a>";
?>