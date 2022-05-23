<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="login.css">
    <title>Logged</title>
</head>

<body>
    <table align='center' border='1' bgcolor='green' width='800' cellpadding='8' cellspacing='0' height='200'>
        <tr>
            <td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>

                <a href="../index.php" target="_parent">Log out</a>
            </td>

        </tr>
        <tr>
            <td bgcolor='#999999' valign='center'>

                <?php

                $host = "localhost";
                $username = "prison";
                $password = "prison123.";
                $db_name = "prison_system";
                $tbl_name = "userlog";

                $con = mysqli_connect($host, $username, $password, $db_name);
                mysqli_select_db($con, "$db_name") or die("cannot connect");

                $sel = mysqli_query($con, "SELECT * from $tbl_name ORDER BY times DESC");
                echo "<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='green'>
        <caption><h3>USERS LOG IN HISTORY</h3></caption>
        <tr bgcolor='green'>
        <th width='10%'>User id</th>
        <th width='10%'>Action</th>
        <th width='10%'>Time</th>
        <th width='10%'>User Type</th>
        </tr>";

                while ($row = mysqli_fetch_array($sel)) {
                    echo "<tr bgcolor='grey'>";

                    echo  "<td width='3%'>" . $row['user_id'] . "</td>";
                    echo  "<td width='7%'>" . $row['actions'] . "</td>";
                    echo  "<td width='7%'>" . $row['times'] . "</td>";
                    echo  "<td width='10%'>" . $row['user_type'] . "</td>";



                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </td>
        </tr>
        <tr>
            <td align='center' bgcolor='white' height='1'><?php
                                                            include("footer.php");
                                                            ?>
            </td>
        </tr>
    </table>
</body>

</html>