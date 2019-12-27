<?php
	//session_start();
?>
<!DOCTYPE HTML>
<HTML>
<header>
</header>
<body>
<?php
	if(!isset($_SESSION['loggedIn'])){
		header('Location: ./logout.php');
	}
?>
</body>
</HTML>
