<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>View Prisoners Officer </title>
  <link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
  <table align='center' border='0' bgcolor='green' width='1300' cellpadding='8' cellspacing='0' height='200'>

    <tr>
      <td bgcolor='#999999' valign='center'>

        <?php

        $host = "localhost";
        $username = "prison";
        $password = "prison123.";
        $db_name = "prison_system";
        $tbl_name = "registration";

        $con = mysqli_connect($host, $username, $password, $db_name);

        $sel = mysqli_query($con, "SELECT * from $tbl_name ORDER BY id DESC LIMIT 0,7");
        echo "<table align='center' width='100%' bgcolor='GREEN' border='0' 
bgcolor='green' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>PRISONER INFORMATION</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='20%'>Photo</th>
<th width='10%'>National id</th>
<th width='10%'>Category</th>
<th width='15%'>Full Name</th>
<th width='10%'>Date of Birth</th>
<th width='15%'>Sentence</th>
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

          $imageURL = 'uploads/' . $row["photo"];


          echo "<td width='20%'>", '<img src=' . $imageURL . "  > ";

          "</td>";
          echo  "<td width='10%'>" . $row['id'] . "</td>";
          echo  "<td width='10%'>" . $row['category'] . "</td>";
          echo  "<td width='15%'>" . $row['Full_Name'] . "</td>";
          echo  "<td width='10%'>" . $row['DOB'] . "</td>";
          echo  "<td width='10%'>" . $row['Sentence'] . "</td>";
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

          // echo '<td width="3%"><b><a href="deleteprisoners1.php?id=' . $row['id'] . '">Delete</a></font></b></td>';


          echo "</tr>";
        }
        echo "</table>";

        ?>

        <br />
      </td>
    </tr>
    <tr>
      <td align="center" bgcolor='green'><a href="officerpanel.php" target="_parent">Officer Admin <b>|</b>
        </a>
        <a href="../admin/prisonerep.php" target="_parent">Print <b>|</b></a>
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