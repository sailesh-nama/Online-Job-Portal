<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Insert Education</title>
</head>

<body>
	<?php
	if (!isset($_SESSION)) {
		session_start();
	}
	$Degree = $_POST['cmbQual'];
	$Uni = $_POST['txtBoard'];
	$Passing = $_POST['cmbYear'];
	$Per = $_POST['txtPer'];
	$Id = $_SESSION['ID'];
	if ($Degree == "Other") {
		$Degree = $_POST['txtOther'];
	}
	// Establish Connection with MYSQL
	$con = mysqli_connect("localhost", "nishal", "Nishal1337", "job");

	// Specify the query to Insert Record
	$sql = "insert into jobseeker_education(JobSeekId,Degree,University,PassingYear,Percentage) values('" . $Id . "','" . $Degree . "','" . $Uni . "','" . $Passing . "','" . $Per . "')";
	// execute query
	mysqli_query($con, $sql);
	// Close The Connection
	mysqli_close($con);

	echo '<script type="text/javascript">alert("Profile Created Succesfully");window.location=\'Education.php\';</script>';

	?>
</body>

</html>