<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<style type="text/css">
		body {
          	padding-top: 50px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        form{
			padding-left:150px;
        }
	</style>
</head>
<body>
	<form action="proses_login.php" method="POST">
		<input type="text" name="username" placeholder="username"/><br>
		<input type="password" name="pass" placeholder="password"/><br>
		<input type="checkbox" name="remember" value="remember" />Remember me
		<input type="submit" value="login">
	</form>
</body>
</html>
