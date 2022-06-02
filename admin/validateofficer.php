<?php
$con = mysqli_connect("localhost", "prison", "prison123.", "prison_system");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//assign  variable to form data 
$id = $_POST['id'];
$fullname = $_POST['fullname'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$telephone = $_POST['telephone'];
$education = $_POST['education'];
$exp = $_POST['exp'];
$dateofbirth = $_POST['dob'];
$password = $_POST['password'];
$email = $_POST['email'];
$username = $_POST['username'];
$city = $_POST['city'];
$prison = $_POST['prison'];

//insert into database
$sql = "insert into officerdetails set
                    id = '$id',
                    fullname = '$fullname',
                    address = '$address',
                    dateofbirth = '$dateofbirth',
                    gender = '$gender',
                    telephone = '$telephone',
                    education= '$education',  
                    experience = '$exp'
                    ";

$link = " insert into police_tbl set 
id = '$id',
Prison_Name = '$prison',
Address = '$address',
City = '$city',
Email = '$email',
Mobile = '$telephone',
UserName = '$username',
Password = '$password'
";


$con = mysqli_connect("localhost", "prison", "prison123.", "prison_system");
$sel = mysqli_query($con, "SELECT * from police_tbl");

$row = mysqli_fetch_array($sel);

//check if username is already in database
if ($row['UserName'] == $username) {
    echo "Username Already Taken !";
    return false;
}

//check if email is already in database

if ($row['Email'] == $email) {
    echo 'Email Already in Use !';
    return false;
}


//check if age is greater than 18 years
$age = 18;

if (is_string($dateofbirth)) {
    $dateofbirth = strtotime($dateofbirth);
}
if (time() - $dateofbirth < $age * 31536000) {
    echo "Invalid date";
    return false;
}


//check if is empty

if (
    empty($id) || empty($fullname) || empty($address) || empty($dateofbirth) || empty($telephone)
    || empty($username) || empty($password) || empty($email) || empty($city)
) {
    echo "All fields are required";
    return false;
}


if (strlen($password) < 6) {
    echo "Password should have at least 6 characters";
    return false;
}

if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}
if (!mysqli_query($con, $link)) {
    die('Error: ' . mysqli_error($con));
}
?>
<script type="text/javascript">
    alert("you have succefully add the record !thank you");
    window.location = "viewoff.php";
</script>