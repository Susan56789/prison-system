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

if (strlen($password) < 6) {
    echo '<script type="text/javascript">alert("Password Should have at least 6 characters!");window.location=\'forgotPassword.php\';</script>';
}

if ($Usertype == 'Police') {
    $sel = mysqli_query($con, "SELECT * from police_tbl WHERE UserName='$username'");

    $row = mysqli_fetch_array($sel);
    //check if username is already in database
    if ($row['UserName'] !== $username) {
        echo '<script type="text/javascript">alert("Username does not exist!");window.location=\'forgotPassword.php\';</script>';
    }

    $sql =  "UPDATE  police_tbl SET Password='$password'
     WHERE UserName='$username' and Email='$email'";
}

if ($Usertype == 'User') {
    $sel = mysqli_query($con, "SELECT * from user_tbl WHERE UserName='$username'");

    $row = mysqli_fetch_array($sel);
    //check if username is already in database
    if ($row['UserName'] !== $username) {
        echo '<script type="text/javascript">alert("Username does not exist!");window.location=\'forgotPassword.php\';</script>';
    }

    $sql =  "UPDATE  user_tbl SET Password='$password'
    WHERE UserName='$username' and Email='$email'";
}
if ($Usertype == 'Admin') {
    $sel = mysqli_query($con, "SELECT * from admin_tbl WHERE Usename='$username'");

    $row = mysqli_fetch_array($sel);

    //check if username is already in database
    if ($row['Usename'] !== $username) {
        echo '<script type="text/javascript">alert("Username does not exist!");window.location=\'forgotPassword.php\';</script>';
    }

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