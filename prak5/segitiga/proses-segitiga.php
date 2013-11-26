<?php 
	$tinggi = $_POST['tinggi'];

	$jumlah=0;

	for ($i=0; $i < $tinggi; $i++) { 
		for ($j=0; $j <= $i ; $j++) { 
			echo "* ";		
			$jumlah++;
		}
		echo "<br>";
	}

	echo "Jumlah bintang = $jumlah";
?>