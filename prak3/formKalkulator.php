<h2>Kalkulator Sederhana Sekali</h2><hr>

<?php
	if(isset($_GET['pes_err'])){
		echo "<h3>".$_GET['pes_err']."</h3>";
	}
?>

<form action="proses.php" method="POST">
	<input type="number" name="bil1" placeholder="bilangan 1"><br>
	<input type="number" name="bil2" placeholder="bilangan 2"><br>
	<select name="operasi">
		<option value="0">---Operasi---</option>
		<option value="1">tambah</option>
		<option value="2">kurang</option>
		<option value="3">kali</option>
		<option value="4">bagi</option>
		<option value="5">pangkat</option>
		<option value="6">akar</option>
	</select><br>
	<input type="submit" value="proses">
</form>