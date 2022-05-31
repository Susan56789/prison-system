<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="login.css">
    <title>Witness</title>
</head>

<body>
    <table align='center' border='1' bgcolor='green' width='80%' cellpadding='8' cellspacing='0' height='200'>
        <tr>

            <td align="center" border='1' bgcolor='brown'>

                <a href="newWitness.php">Add Witness <b>|</b></a><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>

                <a href="viewcase.php" target="_parent">Court details</a>
            </td>

        </tr>
        <tr>
            <td bgcolor='green' align='center'>

                <?php
                ob_start();
                $link = mysqli_connect("localhost", "prison", "prison123.", "prison_system");
                $result = mysqli_query($link, "SELECT * from witness");
                ?>

                <?php


                $select = mysqli_query($link, "SELECT * from witness ORDER BY File_num DESC");

                echo "<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='black'>
    <caption><b>Witness Details</b></caption>
    <tr bgcolor='white'>
    <th width='10%'>National id</th>
    <th width='10%'>File Number</th>
    <th width='10%'>Full Names</th>
    <th width='10%'>Email Address</th>
    <th width='10%'>Telephone</th>
    </tr>";
                while ($row = mysqli_fetch_array($select)) {
                    echo "<tr bgcolor='grey'>";
                    echo  "<td width='10%'>" . $row['NationalID'] . "</td>";
                    echo  "<td width='10%'>" . $row['File_num'] . "</td>";
                    echo  "<td width='10%'>" . $row['FullNames'] . "</td>";
                    echo  "<td width='10%'>" . $row['Email'] . "</td>";
                    echo  "<td width='10%'>" . $row['Telephone'] . "</td>";
                    echo "</tr >";
                }


                ?>
                <br />
            </td>
        </tr>


        <tr>
            <td colspan=' 5' bgcolor='#fff' height='2'> <?php
                                                        include("footer.php");
                                                        ?></td>

        </tr>
    </table>
</body>

</html>