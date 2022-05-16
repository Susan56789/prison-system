<?php
$con = mysqli_connect("localhost", "root", "", "prison_system");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


//escape variable for security here or problem
$Nid = $_POST['Nid'];
$Fname = $_POST['Fname'];
$month = $_POST['1Month'];
$dDay =  $_POST['txtDay'];
$dYear = $_POST['txtYear'];
$dateofbirth = $month . '/' . $dDay . '/' . $dYear;

$month = $_POST['2Month'];
$dDay =  $_POST['TxtDay'];
$dYear = $_POST['TxtYear'];
$datein = $month . '/' . $dDay . '/' . $dYear;

$month = $_POST['3Month'];
$dDay =  $_POST['TXtDay'];
$dYear = $_POST['TXtYear'];
$dateout = $month . '/' . $dDay . '/' . $dYear;

$address = $_POST['address'];
$county = $_POST['county'];
$Gender = $_POST['Gender'];
$education = $_POST['education'];
$status = $_POST['status'];
$sentence = $_POST['sentence'];
$offence = $_POST['offence'];
$sentence = $_POST['sentence'];
$Filenum = $_POST['Filenum'];
$prison = $_POST['prison'];
$category = $_POST['category'];

// File upload path
$targetDir = "uploads/";
$fileName = basename($_POST["photo"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

$allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');


$tempname = $_FILES["photo"]["tmp_name"];

move_uploaded_file($tempname, $targetDir);







//we are using mysqli_query function. it returns a resource on true else False on error
$sql = "INSERT into registration set
                    id = '$Nid',
                    category='$category',
                    Full_Name = '$Fname', 
                    photo='$fileName', 
                    DOB = '$dateofbirth', 
                    datein = '$datein',             
                    dateout = '$dateout',
                    Address = '$address',
                    County = '$county',
                    Gender = '$Gender',
                    Education = '$education',
                    Marital = '$status',
                    Offence = '$offence',
                    Sentence = '$sentence',
                    File_num = '$Filenum',
                    prison = '$prison'";

//perfoms a query on the database
if (!mysqli_query($con, $sql)) {
  die('Error: ' . mysqli_error($con));
}
?>
<script type="text/javascript">
  alert("you have succefully add the record !thank you");
  window.location = "userpanel.php";
</script>