<?php
	if(isset($_GET['pesan'])){
		echo $_GET['pesan'];
	}
?>

<form action="prosesLogin.php" method="POST">
	<input type="text" name="username" placeholder="username"><br>
	<input type="password" name="pass" placeholder="password"><br>
	<input type="submit" value="login">
</form>