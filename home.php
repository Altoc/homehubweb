<?php
	session_start();
	require 'authenticate_session.php';
	require 'dbconnect.php';
?>
<!DOCTYPE HTML>
<HTML>
<header>
	<title>Home</title>
</header>
<script>
	function goto_logout(){
		document.location.href = "./logout.php";
	}
</script>
<body>
	<div>
		<table>
			<tr>
				<td><button>Grocery List</button></td>
				<td><button>Leave A Note</button></td>
				<td><button>Bill Manager</button></td>
				<td><button onclick="goto_logout()">Logout</button></td>
			</tr>
		</table>
	</div>
	<br><br>
	<div>
		<table>
			<th>A Note For You...</th>
			<?php
				$note_query = mysqli_query($HHDB, "SELECT Users.name, Notes.descr, Notes.date FROM Notes INNER JOIN Users ON Users.UID = Notes.UID WHERE Notes.date BETWEEN NOW() - INTERVAL 7 DAY AND NOW()");
				//$note_data = mysqli_fetch_assoc($note_query);
				while($row = mysqli_fetch_assoc($note_query)){
					echo("<tr><td><b>" . $row['name'] . " says: </b>" . $row['descr'] . "</td><td>" . $row['date'] . "</td></tr>");
				}
				mysqli_close($HHDB);
			?>
		</table>
	</div>
</body>
</HTML>
