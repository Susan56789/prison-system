<?php

//set up for mysql Connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'prison_system';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
<?php
//we specify here the Database name we are using
mysqli_select_db($conn, 'prison');
$Nid = $_POST['Nid'];
$Fname = $_POST['Fname'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$county = $_POST['county'];
$sql = "INSERT INTO `prison`.`prisoner` (`Nid`,`Fname`,`dob`,`address`,`county`)
VALUES ('{$Nid}','{$Fname}', '{$dob}', '{$address}', '{$county}');";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
	die('Could not enter data: ' . mysqli_connect_error());
}
?>
<script type="text/javascript">
	alert("New Record is Added thank you");
	window.location = "prisoner.php";
</script>
<!--close of connection-->
<?php
mysqli_close($conn);
?>
<!--set up for mysql Connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'prison_system';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
<?php
//we specify here the Database name we are using
mysqli_select_db($conn, 'prison');
$Nid = $_POST['Nid'];
$Fname = $_POST['Fname'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$county = $_POST['county'];
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//test if the connection is established successfully then it will proceed in next process else it will throw an error message
if (!$conn) {
	die('Could not connect: ' . mysqli_connect_error());
}

//we specify here the Database name we are using

$national = $_POST['national'];
$fname = $_POST['fname'];
$dob	= $_POST['dob'];
$address = $_POST['address'];
$county = $_POST['county'];
$Gender = $_POST['Gender'];
$education	= $_POST['education'];
$marital = $_POST['marital'];
$offence = $_POST['offence'];
$doa = $_POST['doa'];
$sentence	= $_POST['sentence'];
$filenum = $_POST['filenum'];

//It wiil insert a row to our registration `
$sql = "INSERT INTO `prison`.`registration` (`id`, `Full_Name`, `DOB`, `Address`, `County`,`Gender`, `Education`, `Marital`, `Offence`, `Date_in`,`File_num`)
 VALUES ('{$national}', '{$fname}', '{$dob}', '{$address}', '{$county}', '{$Gender}', '{$education}', '{$marital}', '{$offence}', '{$doa}', '{$sentence}', '{$filenum}');";
//we are using mysql_query function. it returns a resource on true else False on error
$retval = mysqli_query($conn, $sql);
if (!$retval) {
	die('Could not enter data: ' . mysqli_connect_error());
}
?>
					<script type="text/javascript">
						alert("New Record is Added to the Database");
						window.location = "register.php";
					</script>
					<?php
					//close of connection
					mysqli_close($conn);
					?>