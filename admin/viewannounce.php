<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>View comments </title>
  <link rel="stylesheet" media="screen" href="../card.css">
</head>

<body>
  <table align='center' bgcolor='green' width='100%' cellpadding='8' cellspacing='0' height='100%'>
    <tr>
      <td>
        <a href="../index.php" target="_parent">Log out <b>|</b></a>
        <a href="adminpanel.php" target="_parent">Admin Panel</a>
      </td>


    </tr>
    <tr>
      <td class="cards" bgcolor='white' align='left'>

        <?php

        $host = "localhost";
        $username = "prison";
        $password = "prison123.";
        $db_name = "prison_system";
        $tbl_name = "announce";

        $con = mysqli_connect($host, $username, $password, $db_name);

        $sel = mysqli_query($con, "SELECT * from $tbl_name");
        /**echo "<table align='center' bgcolor='green' width='100%' border='0' cellpadding='3' cellspacing='2'>
<caption><h3>COMMENTS</h3></caption>
<tr bgcolor='grey'>
<th  width='15%'>From</th>
<th width='10%'>To</th>
<th width='10%'>Message Id</th>
<th width='15%'>Subject</th>
<th width='25%'>Message</th>
</tr>";
         **/
        while ($row = mysqli_fetch_array($sel)) {
          echo "<div class='card'";
          echo  "<i >", "ID: " . $row['Id'] . "</i>";
          echo "<div class='container'";
          echo  "<h4 >", "From: " . $row['Username'] . "</h4>";
          echo  "<h5 >", "To: " . $row['to_'] . "</h5>";
          echo  "<h3 >", "Title: " . $row['subject'] . "</h3>";
          echo  "<p >" . $row['message'] . "</p>";
          echo '<p><b><a class="delete" href="deleteannounce.php">Delete</a></b></p>';
          echo "</div>";
          echo "</div>";
        }


        ?>

        <br />
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

</htm