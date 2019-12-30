<?php
	session_start();
	require 'dbconnect.php';
?>
<!DOCTYPE HTML>
<HTML>
<head>
	<title>Login</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("div input").hide();
			$("div#login").hide();
			$("button.username").click(function(){
				$("input#username").val(this.value);
				$("div input").show();
				$("div#login").show();
			});
		});
	</script>
</head>
<body>
<?php
	$query = mysqli_query($HHDB, "SELECT Name FROM Users");
	while($row = mysqli_fetch_assoc($query)){
		echo("<button class='username' value=" . $row['Name'] . ">" . $row['Name'] . "</button>");
	}
?>
<div id='login'>
	<form action='authenticate_login.php' method='POST'>
		<input id='username' name='username' type='hidden' value=''>
		Password: <input id='password' name='password' type='password' value=''>
		<br>
		<input name='submit' type='submit' value='Login'>
	</form>
</div>
</body>
</HTML>
