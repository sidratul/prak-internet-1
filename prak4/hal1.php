<?php
	if(isset($_GET["nama"]){
		$nama = $_GET["nama"];
	}else{
		$nama = "nama belum di deklarasikan";
	}

	echo $nama;
?>