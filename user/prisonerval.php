<?php
date_default_timezone_set("Africa/Nairobi");
$con = mysqli_connect("localhost", "prison", "prison123.", "prison_system");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


//assign  variable to form data
$Nid = $_POST['Nid'];
$Fname = $_POST['Fname'];
$dateofbirth = $_POST['1date'];
$datein = $_POST['2date'];
$dateout = $_POST['3date'];
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

$dateoftrial = $_POST['date'];
$location = $_POST['location'];
$judge = $_POST['judge'];


//$FullNames = $_POST['Fnames'];
//$Id = $_POST['id'];
//$Email = $_POST['email'];
//$Tel = $_POST['tel'];

// File upload path
$targetDir = "../uploads/";
$fileName = $_FILES["photo"]["name"];
$fileSize = $_FILES["photo"]["size"];
$fileType = pathinfo($fileName, PATHINFO_EXTENSION);
$filetype_lc = strtolower($fileType);
$allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'jfif');
$tempname = $_FILES["photo"]["tmp_name"];
$error = $_FILES["photo"]["error"];
$newFilename = uniqid("IMG-") . "." . $filetype_lc;

$uploadPath = $targetDir . $newFilename;

$today = date('Y/m/d H:i:s');

if (strtotime($datein) > strtotime($today)) {
    echo '<script type="text/javascript">alert("Enter correct date in !");window.location=\'prisoner.php\';</script>';
    //echo "Enter correct date in !";
    //return false;
}

if (strtotime($dateout) < strtotime($datein)) {
    echo '<script type="text/javascript">alert("Enter correct Date Out !");window.location=\'prisoner.php\';</script>';
    //echo "Enter correct Date Out";
   // return false;
}

if (strlen($Nid) < 8 || strlen($Nid) > 8) {
    echo '<script type="text/javascript">alert("Enter correct ID number!");window.location=\'prisoner.php\';</script>';
}



//check if empty
if (
  empty($Nid) || empty($Fname) || empty($dateofbirth) || empty($offence) || empty($Filenum)
  || empty($sentence) || empty($address) || empty($county)
) {
    echo '<script type="text/javascript">alert("All fields are required !");window.location=\'prisoner.php\';</script>';
    //echo 'Please fill all fields.';

    //return false;
}
if (in_array($fileType, $allowTypes)) {
    $upload = move_uploaded_file($tempname, $uploadPath);




    if ($upload) {
        //Insert data into database
        $sql = "INSERT into registration set
id = '$Nid',
category='$category',
photo='$newFilename',
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




        //insert into court table
        // $quer = "INSERT INTO witness (NationalId, FullNames, Email, Telephone, File_num,PrisonerId)
        //VALUES ('$Id', '$FullNames', '$Email', '$Tel', '$Filenum','$Nid');";

        //insert into witness table
        $link = "INSERT INTO court (id, File_number, Dateoftrial, Sentence, Location, Judge) 
VALUES ('$Nid', '$Filenum', '$dateoftrial', '$sentence', '$location', '$judge');";


        $sel = mysqli_query($con, "SELECT * from registration");
        $row = mysqli_fetch_array($sel);

        if ($Filenum  == $row['File_num']) {
            echo '<script type="text/javascript">alert("Check file number !");window.location=\'prisoner.php\';</script>';
            //echo "Check file number";
            //return false;
        }

        //check if age is greater than 18 years
        $age = 18;

        if (is_string($dateofbirth)) {
            $dateofbirth = strtotime($dateofbirth);
        }
        if (time() - $dateofbirth < $age * 31536000) {
            echo '<script type="text/javascript">alert("Invalid date of birth !");window.location=\'prisoner.php\';</script>';
            //echo "Invalid date of birth ";
            //return false;
        }
    }


    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }
    if (!mysqli_query($con, $link)) {
        die('Error: ' . mysqli_error($con));
    }
    if (!mysqli_query($con, $quer)) {
        die('Error: ' . mysqli_error($con));
    }
} else {
    echo $error;
}



?>
<script type="text/javascript">
  alert("you have succefully add the record !thank you");
  window.location = "userpanel.php";
</script>