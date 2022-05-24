<?php
//set up for mysqli Connection
$dbhost = 'localhost';
$dbuser = 'prison';
$dbpass = 'prison123.';
$dbname = 'prison_system';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//test if the connection is established successfully then it will proceed in next process else it will throw an error message
if (!$conn) {
	die('Could not connect: ' . mysqli_connect_error());
}

//we specify here the Database name we are using

$To = $_POST['To'];
$id = rand(1, 1000000);
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];
$From = $_POST['From'];

//It wiil insert a row to our leave details`
$sql = "INSERT INTO `prison_system`.`announce` (`to_`,`Id`,`subject`,`message`,`Username`) 
	     VALUES ('{$To}','{$id}', '{$Subject}', '{$Message}','{$From}');";

//we are using mysqli_query function. it returns a resource on true else False on error
$retval = mysqli_query($conn, $sql);
if (!$retval) {
	die('Could not enter data: ');
}
?>
<script type="text/javascript">
	alert("New Record is Added thank you");
	window.location = "announce.php";
</script>
<?php
//close of connection
mysqli_close($conn);
?>