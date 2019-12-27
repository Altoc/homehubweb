<?php
	session_start();
?>
<!DOCTYPE HTML>
<HTML>
<header>
</header>
<body>
<?php
	session_unset();
	session_destroy();
	header('Location: ./login.php');
?>
</body>
</HTML>
