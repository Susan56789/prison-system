<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> PRISONS MNGNT SYSTEM </title>
  <link rel="stylesheet" media="screen" href="./login.css">
</head>

<body>
  <table align='center' border='1' bgcolor='green' width='820' cellpadding='10' cellspacing='0' height='325'>
    <tr>
      <td colspan='3' height='2'><img src='banner.gif' width="860" height="300">

      </td>
    </tr>

    <tr>
    <tr>
      <td colspan="3" bgcolor="brown" height="1" align="center">
        <font size="4">

          <a href="court.php">COURT</a> |
          <a href="transfer.php">TRANSFER </a>|
          <a href="newprison.php">NEW PRISON </a> |
          <a href="search-form.php">SEARCH </a>
          <!-- <a href="search.php">SEARCH</a> -->
        </font>
      </td>

    </tr>

    <td height='1' colspan='3' align='center' bgcolor="#006600">
      <h4 style="color:white"><?php echo "Hello " . $_SESSION['username'] . "!"  ?></h4>
      &nbsp;
    </td>

    </tr>


    <tr>

      <td width='4%' bgcolor='#FFFFFF' valign='top'>


      <td width='71%' valign='top' bgcolor="#FFFFFF">

        <h3 align='center'> OFFICER PANEL </h3>
        <P align='justify'>
          <font face='Arial, Helvetica, sans-serif'>
            This user has the abilty to view,add or delete some data.
            They can also request prisoner transfer.

      </td>
      <td width='25%' bgcolor='GREEN' valign='top'>


        <table border='0' align='center'>
          <tr>
            <td width="252" ">
<h3>  OFFICER PANNEL : </h3><br/>
<ul>
	

			<div id=" menu">
              <ul>

                <li><a href="viewannounce1.php">View Comment</a></li><br />
                <li><a href="viewprisoners1.php">Prisoners Info</a></li> <br />
                <li><a href="viewcourt1.php">Court Information</a></li><br />
                <li><a href="viewvisitors.php">Visitors</a></li><br />
                <li><a href="viewnewprison.php">View Prisons</a></li><br />
                <li><a href="viewofficer.php">View Officer</a></li><br />
                <li><a href="viewtransfer1.php">Prisoners Transfer</a></li><br />
                <li><a href="../index.php">Log Out</a></li><br />

              </ul>
              </ul>
              </div>
            </td>
          </tr>
        </table>

      </td>
    </tr>
    <tr>
      <td align='center' colspan="3" bgcolor='gold' height='1'><?php
                                                                include "Footer.php";
                                                                ?>
      </td>
    </tr>
  </table>
</body>

</html>