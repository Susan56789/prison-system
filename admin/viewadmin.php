<!DOCTYPE html>
<html>

<head>
    <title>ADMINS </title>
    <link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
    <table align='center' border='1' bgcolor='green' width='800' cellpadding='8' cellspacing='0' height='200'>
        <tr>
            <td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>

                <a href="../index.php" target="_parent">Log out</a>
            </td>

        </tr>
        <tr>
            <td bgcolor='green' align='center'>

                <?php

                $host = "localhost";
                $username = "prison";
                $password = "prison123.";
                $db_name = "prison_system";
                $tbl_name = "admin_tbl";

                $con = mysqli_connect($host, $username, $password, $db_name);
                mysqli_select_db($con, "$db_name") or die("cannot connect");

                $sel = mysqli_query($con, "SELECT * from $tbl_name");
                echo "<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='black'>
<caption><h3>ADMIN INFORMATION</h3></caption>
<tr bgcolor='white'>
<th width='3%'>Full Name</th>
<th width='3%'>National id</th>
<th width='10%'>Username</th>
<th width='10%'>Gender</th>
<th width='10%'>Email</th>
<th width='15%'>Telephone</th>
<th width='10%'>Address</th>
</tr>";

                while ($row = mysqli_fetch_array($sel)) {
                    echo "<tr bgcolor='grey'>";
                    echo  "<td width='7%'>" . $row['Admin_Name'] . "</td>";
                    echo  "<td width='3%'>" . $row['Admin_Id'] . "</td>";
                    echo  "<td width='7%'>" . $row['Usename'] . "</td>";
                    echo  "<td width='7%'>" . $row['Gender'] . "</td>";
                    echo  "<td width='10%'>" . $row['Email'] . "</td>";
                    echo  "<td width='10%'>" . $row['Telephone'] . "</td>";
                    echo  "<td width='10%'>" . $row['Address'] . "</td>";



                    echo "</tr>";
                }
                echo "</table>";

                ?>

                <br />
            </td>

        </tr>

        <tr>
            <td align='center' bgcolor='gold' height='1'><?php
                                                            include("footer.php");
                                                            ?>
            </td>
        </tr>
    </table>
</body>
</head>

</html>