<?php
$con = mysqli_connect("localhost", "prison", "prison123.", "prison_system");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//escape variable for security here or problem
$id = $_POST['id'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$tel = $_POST['telephone'];
$address = $_POST['address'];
$password = $_POST['password'];
$username = $_POST['usname'];

//we are using mysql_query function. it returns a resource on true else False on error
$sql = "insert into admin_tbl set
Admin_Id = '$id',
Admin_Name = '$name',
Gender = '$gender',
Email = '$email',
Telephone = '$tel',
Address = '$address',
Admin_Password = '$password',
Usename = '$username'
";

//prevent sending empty form
if (
    empty($id) || empty($name) || empty($email) || empty($tel) || empty($address) || empty($password)
) {
    echo "Please fill all fields";
    return false;
}

if (strlen($password) < 6) {
    echo "Password should have at least 6 characters";
    return false;
}

if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}
?>
<script type="text/javascript">
    alert("you have succefully add the record !thank you");
    window.location = "adminpanel.php";
</script>