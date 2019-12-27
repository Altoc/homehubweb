<?php
	//session_start();
?>
<!DOCTYPE HTML>
<HTML>
<header>
</header>
<body>
<?php
	$servername = 'localhost';
	$username 	= 'root';
	$password 	= '';
	$dbname 		= 'homehubweb';
	$HHDB = @new mysqli($servername, $username, $password, $dbname);

	if(!$HHDB){
		die('Could not connect to HomeHub DB: ') . mysqli_error($HHDB);
	} else {
		//echo("DB Connection Successful!");
	}
?>
</body>
</HTML>
