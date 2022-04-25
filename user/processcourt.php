<?php
//set up for mysqli Connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db_name= 'prison_system';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
//test if the connection is established successfully then it will proceed in next process else it will throw an error message
if(! $conn )
{
  die('Could not connect: ' . mysqli_error($error));
}


//we specify here the Database name we are using
mysqli_select_db($conn,'prison_system');
$Nationalid=$_POST['Nationalid'];
$Filenum=$_POST['Filenum'];
$dot=$_POST['dot'];
$sentence=$_POST['sentence'];
$location=$_POST['location'];

//It wiil insert a row to our employee_details`
$sql = "INSERT INTO `prison`.`court` (`National_id`,`File_number`, `Dateoftrial`, `Sentence`, `Location`) 
	VALUES ('{$Nationalid}', '{$Filenum}', '{$dot}', '{$sentence}', '{$location}');";
//we are using mysqli_query function. it returns a resource on true else False on error
$retval = mysqli_query(  $conn , $sql);
if(! $retval )
{
  die('Could not enter data: ' . mysqli_error($error));
}
?>
					<script type="text/javascript">
						alert("New Record is Added thank you");
						window.location = "court.php";
					</script>
					<?php
//close of connection
mysqli_close($conn);
?>