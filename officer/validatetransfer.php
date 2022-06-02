<?php
session_start();
date_default_timezone_set("Africa/Nairobi");

$con = mysqli_connect("localhost", "prison", "prison123.", "prison_system");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



//assign  variable to form data 

$Nid = mysqli_real_escape_string($con, $_POST['Nid']);
//$Filenum = mysqli_real_escape_string($con, $_POST['Filenum']);
$From = mysqli_real_escape_string($con, $_POST['From']);
$To = mysqli_real_escape_string($con, $_POST['To']);
$dateoftransfer = mysqli_real_escape_string($con, $_POST['date']);

//check if is in database

$sel = mysqli_query($con, "SELECT * from registration WHERE id = $Nid");
$row = mysqli_fetch_array($sel);
if ($row['id'] != $Nid) {
	echo "Prisoner does not exist, input correct ID";
	return false;
}
$Filenum = $row['File_num'];

$datein = $row['datein'];

//date of transfer should not be less than date in 
if (strtotime($dateoftransfer) < strtotime($datein)) {
	echo 'Please correct date of transfer';
	return false;
}

if ($To == $From) {
	echo "Choose a different prison";
	return false;
}

$sql = "INSERT INTO transfer (National_id, File_num, From_prison, To_prison, Dateoftransfer) 
VALUES ('$Nid', '$Filenum', '$From', '$To', '$dateoftransfer');";

//record user actions
if (isset($_POST['submit'])) {
	$id = $_SESSION['id'];
	$status = 'Requested prisoner transfer';
	$time = date('Y/m/d H:i:s');
	$UserType = 'Police';
	$sql = "INSERT INTO userlog (user_id , actions, times, user_type) VALUES ('$id', '$status', '$time','$UserType')";
	if (!mysqli_query($con, $sql)) {
		die('Error: ' . mysqli_error($con));
	}
}


if (!mysqli_query($con, $sql)) {
	die('Error: ' . mysqli_error($con));
}
?>
<script type="text/javascript">
	alert("you have succefully add the record !thank you");
	window.location = "viewtransfer1.php";
</script>