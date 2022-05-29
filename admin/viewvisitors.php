<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>View visitors </title>
  <link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
  <table align='center' border='0' bgcolor='green' width='1300' cellpadding='8' cellspacing='0' height='200'>
    <tr>

      <td align="center" bgcolor='green'><a href="adminpanel.php" target="_parent">Admin panel<b>|</b></a>
        <a href="../officer/visitorep.php" target="_parent">Report <b>|</b></a>
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
        $tbl_name = "visitor";

        $con = mysqli_connect($host, $username, $password, $db_name);


        $sel = mysqli_query($con, "SELECT * from $tbl_name ORDER BY id DESC LIMIT 0,7");
        echo "<table align='center' width='100%' bgcolor='GREEN' border='0' bgcolor='green' 
cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>VISITORS INFORMATION</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='3%'>National id</th>
<th width='10%'>Full Name</th>
<th width='15%'>Address</th>
<th width='10%'>Date of visit</th>
<th width='10%'>Time in</th>
<th width='10%'>Time out</th>
<th width='10%'>Relationship</th>
<th width='10%'>Telephone</th>
<th width='3%'>Prisoner Name</th>

</tr>";

        while ($row = mysqli_fetch_array($sel)) {
          echo "<tr bgcolor='grey'>";

          echo  "<td width='3%'>" . $row['id'] . "</td>";
          echo  "<td width='7%'>" . $row['fullname'] . "</td>";
          echo  "<td width='10%'>" . $row['address'] . "</td>";
          echo  "<td width='10%'>" . $row['dateofvisit'] . "</td>";
          echo  "<td width='10%'>" . $row['timein'] . "</td>";
          echo  "<td width='10%'>" . $row['timeout'] . "</td>";
          echo  "<td width='10%'>" . $row['relationship'] . "</td>";
          echo  "<td width='3%'>" . $row['telephone'] . "</td>";
          echo  "<td width='10%'>" . $row['prisoner'] . "</td>";



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
</head>

</html>