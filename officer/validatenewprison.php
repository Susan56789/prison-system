<?php
$con = mysqli_connect("localhost", "prison", "prison123.", "prison_system");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//escape variable for security here or problem
$pno = $_POST['pno'];
$pname = $_POST['pname'];
$location = $_POST['location'];
$month = $_POST['lMonth'];
$dDay =  $_POST['txtDay'];
$dYear = $_POST['txtYear'];
$opendate = $month . '/' . $dDay . '/' . $dYear;
$opendate = date('Y-m-d', strtotime($opendate));
$contact = $_POST['contact'];
$capacity = $_POST['capacity'];


//we are using mysql_query function. it returns a resource on true else False on error
$sql = "insert into newprison set
                    pno = '$pno',
                    pname = '$pname',
                    location = '$location',
                    opendate = '$opendate',
                    contact = '$contact',
                    capacity = '$capacity'";





if (!mysqli_query($con, $sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
<script type="text/javascript">
  alert("you have succefully add the record !thank you");
  window.location = "officerpanel.php";
</script>