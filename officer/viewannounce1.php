<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>View Announce Details by Officer </title>
  <link rel="stylesheet" media="screen" href="../card.css">
</head>

<body>
  <table align='center' border='0' bgcolor='green' width='100%' cellpadding='8' cellspacing='0' height='100%'>
    <tr>
      <td align="center" border='1' bgcolor='brown'>
        <a href="officerpanel.php" target="_parent">Panel Officer <b>|</b></a>
        <!--<a href="deleteannounce1.php" target="_parent">Delete <b>|</b></a>---->
        <a href="../index.php" target="_parent">Log out</a>
      </td>


    </tr>
    <tr>
      <td class="cards" bgcolor='white' valign='center'>

        <?php

        $host = "localhost";
        $username = "prison";
        $password = "prison123.";
        $db_name = "prison_system";
        $tbl_name = "announce";

        $con = mysqli_connect($host, $username, $password, $db_name);

        $sel = mysqli_query($con, "SELECT * from $tbl_name");
        while ($row = mysqli_fetch_array($sel)) {
          echo "<div class='card'";
          // echo  "<i >", "ID: " . $row['Id'] . "</i>";
          echo "<i>" . $row['posted_on'] . "</i><br/>";
          echo "<div class='container'";
          echo  "<h4 >", "From: " . $row['Username'] . "</h4>";
          echo  "<h5 >", "To: " . $row['to_'] . "</h5>";
          echo  "<h3 >", "Title: " . $row['subject'] . "</h3>";
          echo  "<p >" . $row['message'] . "</p>";
          //echo '<p><b><a class="delete" href="deleteannounce1.php">Delete</a></b></p>';
          echo "</div>";
          echo "</div>";
        }

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

</html>