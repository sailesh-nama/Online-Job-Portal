<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Delete User</title>
</head>

<body>
	<?php

	$Id = $_GET['UserId'];
	// Establish Connection with Database
	$con = mysqli_connect("localhost", "nishal", "Nishal1337", "job");
	// Specify the query to Insert Record
	$sql = "DELETE FROM user_master WHERE UserId='" . $Id . "'";
	// execute query
	mysqli_query($con, $sql);
	// Close The Connection
	mysqli_close($con);
	echo '<script type="text/javascript">alert("User Deleted Succesfully");window.location=\'User.php\';</script>';

	?>
</body>

</html>