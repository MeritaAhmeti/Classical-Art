<style>
table {
    width: 80%;
    border-collapse: collapse;
}

table, td, th {
	background-color: #2b2b2b;
	border: 1px solid #2F4F4F;
    padding: 5px;
}

th {text-align: left;}
</style>

<?php
session_start();
require_once "config.php";

$_SESSION['username'] = isset($_SESSION['username']) ? $_SESSION['username'] : '';

$user_check_query = "SELECT * FROM users WHERE username='".$_SESSION['username']."'";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
	if($user['usergroup'] == 2)
	{

		$q = isset($_GET['q']) ? $_GET['q'] : '';

		mysqli_select_db($db,"ajax_demo");
		$sql="SELECT * FROM users WHERE username LIKE '%".$q."%' LIMIT 2";
		$result = mysqli_query($db,$sql);
		if (mysqli_num_rows($result) >= 1) 
		{
			echo "<table>
			<tr>
			<th>Id</th>
			<th>Usergroup</th>
			<th>Username</th>
			<th>Password</th>
			<th>Created At</th>
			</tr>";
		}
		while($row = mysqli_fetch_array($result)) {
		    echo "<tr>";
		    echo "<td>" . $row['id'] . "</td>";
		    echo "<td>" . $row['usergroup'] . "</td>";
		    echo "<td>" . $row['username'] . "</td>";
		    echo "<td>" . $row['password'] . "</td>";
		    echo "<td>" . $row['created_at'] . "</td>";
		    echo "</tr>";
		}
		echo "</table>";
		mysqli_close($db);
	} else die ("<h2 style='margin-left: 60px; color: grey;'>You dont have enough access to do this!</h2>");

} else die ("<h2 style='margin-left: 80px; color: grey;'>You must be logged in to do this!</h2>");

?>