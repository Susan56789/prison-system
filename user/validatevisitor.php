/
<?php
date_default_timezone_set("Africa/Nairobi");
$con = mysqli_connect("localhost", "prison", "prison123.", "prison_system");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//assign  variable to form data
$id = $_POST['id'];
$fullname = $_POST['fullname'];
$address = $_POST['address'];
//$month = $_POST['lMonth'];
//$dDay =  $_POST['txtDay'];
//$dYear = $_POST['txtYear'];
$timein = $_POST['timein'];
$timeout = $_POST['timeout'];
$relationship = $_POST['relationship'];
$telephone = $_POST['telephone'];
$prisoner = $_POST['prisoner'];

$date = $_POST['date'];



$today = date('Y/m/d H:i:s');


if (strtotime($date) > strtotime($today)) {
    echo '<script type="text/javascript">alert("Enter correct date!");window.location=\'visitors.php\';</script>';
    //echo "Enter correct date in !";
  //return false;
}

if (
  empty($id) || empty($fullname) || empty($address) || empty($date) || empty($timein)
  || empty($timeout) || empty($telephone) || empty($relationship) || empty($prisoner)
) {
    echo "Please fill all fields";
    return false;
}


//insert into database
$sql = "insert into visitor set
                    id = '$id',
                    fullname = '$fullname',
                    address = '$address',
                    dateofvisit = '$date',
                    timein = '$timein',
                    timeout = '$timeout',
                    relationship = '$relationship',
                    telephone = '$telephone',
                    prisoner = '$prisoner'
                    ";


if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}
?>
<script type="text/javascript">
  alert("you have succefully add the record !thank you");
  window.location = "userpanel.php";
</script>