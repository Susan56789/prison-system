<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="description" content="">
    <title>LOGIN</title>
</head>

<body>

    <?php
    session_start();
    $UserName = $_POST['username'];
    $Password = $_POST['password'];
    $UserType = $_POST['cmbUser'];

    if ($UserType == "Admin") {
        $con = mySQLi_connect('localhost', 'prison', 'prison123.', 'prison_system');
        $result = mySQLi_query($con, "SELECT * FROM Admin_Tbl WHERE Usename='$UserName' and Admin_Password='$Password'");
        //$row = mysqli_fetch_array($result);
        $_SESSION['username'] = $row['Admin_Name'];
        $records = mySQLi_num_rows($result);
        $row = mySQLi_fetch_array($result);
        if ($records == 0) {
            echo $records;
            echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
        } else {
            header("location:admin/adminpanel.php");
        }
        mySQLi_close($con);
    } else if ($UserType == "Police") {
        $con = mySQLi_connect('localhost', 'prison', 'prison123.', 'prison_system');
        $result = mySQLi_query($con,  "SELECT * from police_tbl
where UserName='$UserName' and Password='$Password'");
        $records = mySQLi_num_rows($result);
        $row = mySQLi_fetch_array($result);
        $id = $row['id'];
        $link = mysqli_query($con, "SELECT * FROM officerdetails where id='$id'");
        $sel =  mySQLi_fetch_array($link);
        $_SESSION['username'] = $sel['fullname'];
        if ($records == 0) {
            echo $records;
            echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
        } else {
            $_SESSION['ID'] = $row['Station_Id'];
            $_SESSION['Name'] = $row['Station_Name'];
            header("location: officer/officerpanel.php");
        }
        mySQLi_close($con);
    } else {
        $con = mySQLi_connect('localhost', 'prison', 'prison123.', 'prison_system');
        $result = mySQLi_query($con, "SELECT * from user_tbl where UserName='$UserName' and Password='$Password'");
        $records = mySQLi_num_rows($result);
        $row = mySQLi_fetch_array($result);
        if ($records == 0) {
            echo $records;
            echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
        } else {
            $_SESSION['ID'] = $row['User_Id'];
            $_SESSION['Name'] = $row['Name'];
            header("location: user/userpanel.php");
        }
        mysqli_close($con);
    }

    ?>
</body>

</html>