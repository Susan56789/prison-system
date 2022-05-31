<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PRIOSONER DETAILS </title>
    <link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
    <table align='center' border='0' bgcolor='green' width='1000' cellpadding='8' cellspacing='0' height='200'>
        <tr>
            <td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>

                <a href="../index.php" target="_parent">Log out</a>
            </td>

        </tr>
        <tr>
            <td bgcolor='#999999' align='center'>

                <?php



                $host = "localhost";
                $username = "prison";
                $password = "prison123.";
                $db_name = "prison_system";
                $tbl_name = "registration";

                $con = mysqli_connect($host, $username, $password, $db_name);

                $query = "SELECT * from $tbl_name WHERE category='Special'  ORDER BY datein DESC ";
                $sel = mysqli_query($con, $query);
                $records = mySQLi_num_rows($sel);


                echo "<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='green'>
<caption>
<h3>  PRISONERS DETAIL ($records records)</h3>
</caption>

<tr bgcolor='white'>
<th width='10%'>Photo</th>
<th width='7%'>National id</th>
<th width='7%'>Category</th>
<th width='15%'>Full Name</th>
<th width='15%'>Date of Birth</th>
<th width='7%'>Sentence</th>
<th width='10%'>Date In</th>
<th width='10%'>Date Out</th>
<th width='15%'>Address</th>
<th width='10%'>County</th>
<th width='10%'>Gender</th>
<th width='10%'>Education</th>
<th width='10%'>Status</th>
<th width='15%'>Offence</th>
<th width='10%'>File Number</th>
<th width='10%'>Prison</th>
</tr>";


                while ($row = mysqli_fetch_array($sel)) {

                    echo "<tr bgcolor='grey'>";
                    echo "<td><img src='../uploads/" . $row['photo'] . "' width='80' height='80'></td>";
                    "</td>";
                    echo  "<td width='7%'>" . $row['id'] . "</td>";
                    echo  "<td width='7%'>" . $row['category'] . "</td>";
                    echo  "<td width='15%'>" . $row['Full_Name'] . "</td>";
                    echo  "<td width='15%'>" . $row['DOB'] . "</td>";
                    echo  "<td width='7%'>" . $row['Sentence'] . "</td>";
                    echo  "<td width='10%'>" . $row['datein'] . "</td>";
                    echo  "<td width='10%'>" . $row['dateout'] . "</td>";
                    echo  "<td width='10%'>" . $row['Address'] . "</td>";
                    echo  "<td width='10%'>" . $row['County'] . "</td>";
                    echo  "<td width='10%'>" . $row['Gender'] . "</td>";
                    echo  "<td width='10%'>" . $row['Education'] . "</td>";
                    echo  "<td width='10%'>" . $row['Marital'] . "</td>";
                    echo  "<td width='10%'>" . $row['Offence'] . "</td>";
                    echo  "<td width='10%'>" . $row['File_num'] . "</td>";
                    echo  "<td width='10%'>" . $row['prison'] . "</td>";
                    echo '<td width="5%"><b><a href="editprisoner.php?id=' . $row['id'] . '">Edit</a></b></td>';
                    // echo '<td width="5%"><b><a href="deleteprisoners.php?id=' . $row['id'] . '">Delete</a></b></td>';


                    echo "</tr>";
                }
                echo "</table>";

                ?>

                <br />
            </td>
        </tr>


        <tr>
            <td align='center' bgcolor='gold' height='1'>
                <?php
                include("footer.php");
                ?>
            </td>
        </tr>
    </table>
</body>

</html>