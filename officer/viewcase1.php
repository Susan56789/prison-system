<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Case file Prisoners officer</title>
  <link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
  <table align='center' border='0' bgcolor='green' width='800' cellpadding='8' cellspacing='0' height='200'>
    <tr>
      <td bgcolor='#999999' valign='center'>

        <?php

        $host = "localhost";
        $username = "root";
        $password = "";
        $db_name = "prison_system";
        $tbl_name = "court";

        $con = mysqli_connect($host, $username, $password, $db_name);

        $sel = mysqli_query($con, "SELECT * from $tbl_name");
        echo "<table align='center'  bgcolor='GREEN' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>COURT INFORMATION</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='3%'>National id</th>
<th width='10%'>Fie Number</th>
<th width='10%'>Date of trial</th>
<th width='15%'>Sentence</th>
<th width='10%'>Location</th>
<th width='10%'>Judge</th>
</tr>";

        while ($row = mysqli_fetch_array($sel)) {
          echo "<tr bgcolor='white'>";

          echo  "<td width='3%'>" . $row['id'] . "</td>";
          echo  "<td width='7%'>" . $row['File_number'] . "</td>";
          echo  "<td width='10%'>" . $row['Dateoftrial'] . "</td>";
          echo  "<td width='10%'>" . $row['Sentence'] . "</td>";
          echo  "<td width='10%'>" . $row['Location'] . "</td>";
          echo  "<td width='10%'>" . $row['Judge'] . "</td>";


          echo "</tr>";
        }
        echo "</table>";

        ?>

        <br />
      </td>
    </tr>
    <tr>
      <td align="center"><a href="officerpanel.php" target="_parent">Panel Officer <b>|</b></a>
        <a href="deletecase.php" target="_parent">Delete prisoners <b>|</b></a>
        <a href="../index.php" target="_parent">Log out</a>
      </td>

    </tr>
    <tr>
      <td align='center' bgcolor='white' height='1'>
        <?php
        include("footer.php");
        ?>
      </td>
    </tr>
  </table>
</body>

</html>