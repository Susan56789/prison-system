<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>View transfer record OFFICER </title>
  <link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
  <table align='center' border='0' bgcolor='GREEN' width='800' cellpadding='8' cellspacing='0' height='200'>
    <tr>
      <td align="center" bgcolor='GREEN'><a href="officerpanel.php" target="_parent">Panel Officer<b>|</b></a>
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
        $tbl_name = "transfer";

        $con = mysqli_connect($host, $username, $password, $db_name);

        $sel = mysqli_query($con, "SELECT * from $tbl_name ORDER BY Dateoftransfer DESC");
        echo "<table align='center'bgcolor='GREEN' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>PRISONER TRANSFER  INFORMATION</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='3%'>National id</th>
<th width='10%'>File Number</th>
<th width='15%'>From Prison</th>
<th width='10%'>To Prison</th>
<th width='10%'>Date of Transfer</th>
</tr>";

        while ($row = mysqli_fetch_array($sel)) {
          echo "<tr bgcolor='grey'>";

          echo  "<td width='3%'>" . $row['National_id'] . "</td>";
          echo  "<td width='10%'>" . $row['File_num'] . "</td>";
          echo  "<td width='7%'>" . $row['From_prison'] . "</td>";
          echo  "<td width='10%'>" . $row['To_prison'] . "</td>";
          echo  "<td width='10%'>" . $row['Dateoftransfer'] . "</td>";

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