<?php
$con = mysqli_connect("localhost", "root", "", "prison_system");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$filename = $_FILES["photo"]["name"];
$tempname = $_FILES["photo"]["tmp_name"];
$folder = "../uploads" . $filename;




if (!file_exists($folder)) {
    @mkdir($folder, 0777);
}


move_uploaded_file($tempname, $folder);
//escape variable for security here or problem
$Nid = $_POST['Nid'];
$Fname = $_POST['Fname'];
$month1 = $_POST['1Month'];
$dDay =  $_POST['txtDay'];
$dYear = $_POST['txtYear'];
$dateofbirth = $month1 . '/' . $dDay . '/' . $dYear;

$month2 = $_POST['2Month'];
$dDay =  $_POST['TxtDay'];
$dYear = $_POST['TxtYear'];
$datein = $month2 . '/' . $dDay . '/' . $dYear;

$month = $_POST['3Month'];
$dDay =  $_POST['TXtDay'];
$dYear = $_POST['TXtYear'];
$dateout = $month . '/' . $dDay . '/' . $dYear;

$photo = $_POST['photo'];
$category = $_POST['category'];
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





//we are using mysqli_query function. it returns a resource on true else False on error
$sql = "INSERT into registration set
                    id = '$Nid',
                    category='$category',
                    photo='$folder',
                    Full_Name = '$Fname',  
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


if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}
?>
<script type="text/javascript">
    alert("you have succefully add the record !thank you");
    window.location = "viewprisoners.php";
</script>