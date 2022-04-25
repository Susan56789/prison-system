<html>

<head>
  <title>PRISON OFFICER RECORD </title>
  <link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
  <table align='center' border='0' bgcolor='green' width='1200' cellpadding='8' cellspacing='0' height='200'>
    <tr>
      <td bgcolor='#999999' valign='center'>

        <?php

        $host = "localhost";
        $username = "root";
        $password = "";
        $db_name = "prison_system";
        $tbl_name = "officer";

        $con = mysqli_connect($host, $username, $password, $db_name);


        $sel = mysqli_query($con, "SELECT * from $tbl_name");
        echo "<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='gr'>een
<caption><h3>PRISONER TRANSFER  INFORMATION</h3></caption>
<tr bgcolor='green'>
<th width='3%'> id</th>
<th width='10%'>Phone Number</th>
<th width='15%'>From Prison</th>
<th width='10%'>To Prison</th>
<th width='10%'>Date of Transfer</th>
</tr>";

        while ($row = mysqli_fetch_array($sel)) {
          echo "<tr bgcolor='white'>";

          echo  "<td width='3%'>" . $row['National_id'] . "</td>";
          echo  "<td width='10%'>" . $row['Telephone'] . "</td>";
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

      <td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>
        <a href="../index.php" target="_parent">Log out</a>
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
</head>

</html>