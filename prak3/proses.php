<?php
	$bil1 = $_POST['bil1'];
	$bil2 = $_POST['bil2'];
	$operasi = $_POST['operasi'];

	$err=false;
	$pes_err="";

	if(empty($bil1)){
		$err=true;
		$pes_err=$pes_err."biilangan 1 tidak boleh kosong<br>";
	}

	if(empty($bil2)){
		$err=true;
		$pes_err=$pes_err."biilangan 2 tidak boleh kosong<br>";
	}

	echo "<h2>HASIL</h2>";

	if($operasi==1){
		echo "$bil1 + $bil2 = ";
		echo $bil1+$bil2;
	}else if($operasi==2){
		echo "$bil1 - $bil2 = ";
		echo $bil1-$bil2;
	}else if($operasi==3){
		echo "$bil1 x $bil2 = ";
		echo $bil1*$bil2;
	}else if($operasi==4){
		echo "$bil1 / $bil2 = ";
		echo $bil1/$bil2;
	}else if($operasi==5){
		echo "$bil1 dipangkatkan $bil2  = ";
		echo pow($bil1, $bil2);
	}else if($operasi==6){
		echo "akar pangkat $bil2 dari $bil1 = ";
		echo pow($bil1, (1/$bil2));
	}else{
		$pes_err=$pes_err."operasi harus dipilih";
		$err=true;
	}

	if($err == true){
		header("Location: formKalkulator.php?pes_err=$pes_err");
	}
?>