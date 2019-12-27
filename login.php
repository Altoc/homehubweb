<?php
	session_start();
?>
<!DOCTYPE HTML>
<HTML>
<header>
	<title>Login</title>
</header>
<body>
	<form action='authenticate_login.php' method='post'>
		Username: <input type='text' name='username' value='' id='username'><br>
		Password: <input type='text' name='password' value='' id='password'><br>
		<input type='submit' value='Login'>
	</form>
</body>
</HTML>
