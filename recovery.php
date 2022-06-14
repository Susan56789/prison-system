<?php
$con = mysqli_connect("localhost", "prison", "prison123.", "prison_system");

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['Npassword'];
$confirm = $_POST['confirm'];
$Usertype = $_POST['user'];


if ($password !== $confirm) {
    echo '<script type="text/javascript">alert("Password do not match!");window.location=\'forgotPassword.php\';</script>';
}

if ($Usertype == 'Police') {
    $sql =  "UPDATE  police_tbl SET Password='$password'
     WHERE UserName='$username' and Email='$email'";
}

if ($Usertype == 'User') {
    $sql =  "UPDATE  user_tbl SET Password='$password'
    WHERE UserName='$username' and Email='$email'";
}
if ($Usertype == 'Admin') {
    $sql =  "UPDATE  Admin_Tbl SET Admin_Password='$password'
     WHERE Usename='$username' and Email='$email'";
}

if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}
?>
<script type="text/javascript">
    alert("Password Updated Successfully. Login ?");
    window.location = "login2.php";
</script>