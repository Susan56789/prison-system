<?php
session_start();
date_default_timezone_set("Africa/Nairobi");
$con = mysqli_connect("localhost", "prison", "prison123.", "prison_system");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security

$Nationalid = mysqli_real_escape_string($con, $_POST['Nationalid']);
//$Filenum = mysqli_real_escape_string($con, $_POST['Filenum']);
$dateoftrial = mysqli_real_escape_string($con, $_POST['date']);
//$sentence = mysqli_real_escape_string($con, $_POST['sentence']);
$location = mysqli_real_escape_string($con, $_POST['location']);
$judge = mysqli_real_escape_string($con, $_POST['judge']);




//check if is in database
$query = "SELECT * from registration WHERE id = $Nationalid";
$sel = mysqli_query($con, $query);
$row = mysqli_fetch_array($sel);
if ($row['id'] != $Nationalid) {
	echo "Prisoner does not exist, input correct ID";
	return false;
}
$Filenum = $row['File_num'];
$sentence = $row['Sentence'];

if (empty($Filenum) | empty($judge) | empty($Nationalid) | empty($dateoftrial)) {
	echo "All Fields are required !";
	return false;
}

$sql = "INSERT INTO court (id, File_number, Dateoftrial, Sentence, Location, Judge) 
VALUES ('$Nationalid', '$Filenum', '$dateoftrial', '$sentence', '$location', '$judge');";

if (!mysqli_query($con, $sql)) {
	die('Error: ' . mysqli_error($con));
}

//record user actions
if (isset($_POST['submit'])) {
	$id = $_SESSION['id'];
	$status = 'Added court details';
	$time = date('Y/m/d H:i:s');
	$UserType = 'Admin';
	$sql = "INSERT INTO userlog (user_id , actions, times, user_type) VALUES ('$id', '$status', '$time','$UserType')";
	if (!mysqli_query($con, $sql)) {
		die('Error: ' . mysqli_error($con));
	}
}

?>
<script type="text/javascript">
	alert("you have succefully add the record !thank you");
	window.location = "viewcase.php";
</script>