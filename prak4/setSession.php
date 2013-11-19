<?php
	session_start();
	$nama = "budi";
	$_SESSION['nama']=$nama;

	echo $nama;
	echo "<br><a href='hal2.php'>ke Halaman berikutnya</a>";
?>