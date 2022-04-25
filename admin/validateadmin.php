<?php
$con = mysqli_connect("localhost", "root", "", "prison_system");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//escape variable for security here or problem
$id = $_POST['id'];
$name = $_POST['names'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$tel = $_POST['telephone'];
$address = $_POST['address'];
$password = $_POST['password'];


//we are using mysql_query function. it returns a resource on true else False on error
$sql = "insert into admin_tbl set
Admin_Id = '$id',
Admin_Name = '$name',
Gender = '$gender',
Email = '$email',
Telephone = '$tel',
Address = '$address',
Admin_Password = '$password'
";


if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}
?>
<script type="text/javascript">
    alert("you have succefully add the record !thank you");
    window.location = "adminpanel.php";
</script>