<?php
$con = mysqli_connect("localhost", "prison", "prison123.", "prison_system");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//assign  variable to form data
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


//insert into database
$sql = "insert into newprison set
                    pno = '$pno',
                    pname = '$pname',
                    location = '$location',
                    opendate = '$opendate',
                    contact = '$contact',
                    capacity = '$capacity'";



//record user actions
if (isset($_POST['signup'])) {
    $id = $_SESSION['id'];
    $status = 'Added new prison';
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
  window.location = "officerpanel.php";
</script>