<?php
	session_start();
	require 'dbconnect.php';
?>
<!DOCTYPE HTML>
<HTML>
<header>
</header>
<body>
	<?php
	$postUser = $_POST['username'];
	$postPass = $_POST['password'];
	$auth_query = mysqli_query($HHDB, "SELECT count(*) as total FROM Users WHERE name='$postUser' AND password='$postPass'");
	$data = mysqli_fetch_assoc($auth_query);
	if($data){
		if($data['total'] == 1){
			$_SESSION['username'] = $postUser;
			$_SESSION['loggedIn'] = true;
			echo("User is in DB");
			header('Location: ./home.php');
		} else {
			echo("User is not in DB");
			header('Location: ./logout.php');
		}
	} else {
		echo("DB Error");
	}
	mysqli_close($HHDB);
	?>
</body>
</HTML>
