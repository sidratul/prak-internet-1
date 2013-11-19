<?php
	session_start();

	//unset($_SESSION["nama"]);

	session_destroy();

	if(isset($_SESSION['nama'])){
		echo $_SESSION['nama'];
	}else{
		echo "session dengan index nama belum di set<br>";
	}
	echo $_SESSION['pass'];

?>