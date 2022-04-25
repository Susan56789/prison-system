<head>
  <title> Prison Management System</title>
  <link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
  <table align='center' border='1' bgcolor='green' width='820' cellpadding='10' cellspacing='0' height='215'>
    <tr>
      <td colspan='3' height='2'><img src='banner.gif'></td>
    </tr>
    <tr>
      <td height='1' colspan='3' align='right' bgcolor="#006600">&nbsp;</td>
    </tr>

    <tr>
      <td width='4%' bgcolor='#FFFFFF' valign='top'>
        <h3 align='center' title='You should be online'>&nbsp;</h3>
      </td>

      <td width='71%' valign='top' bgcolor="#FFFFFF">

        <br />
        <h3 align='center'>RESPONSABILITY OF USER(REGISTRATIONS) </h3>
        <P align='justify'>
          <font face='Arial, Helvetica, sans-serif'> This is for user
            that allows the user to register new incoming prisoners and visitors. It is done by the officer in charge of registration
            in the prison reception. They can only register and their access is secured .</font>
        </p>

      </td>
      <td width='25%' bgcolor='green' valign='top'>


        <table border='0' align='center'>
          <tr>
            <td width="255">
              <h4> USER MANAGEMENT : </h4><br />
              <div id="header">
                <div id="menu">
                  <ul>

                    <li><a href='prisoner.php'><b>Prisoner Reg</b></a></li>
                    <br>
                    <!--<li><a href='registration.php'><b>Register Form</b></a></li>
		<br>--->
                    <li><a href='visitors.php'><b>visitors registration </b></a></li>
                    <br>
                    <!--<li><a href='addofficer.php'><b>Officer registration </b></a></li>
    <br>-->
                    <!-- <li><a href='transfer.php'><b>Transfer Prisoners</b></a></li> -->
                    <br>
                    <li><a href='../index.php'><b>LOG OUT</b></a></li>
                  </ul>
                </div>
              </div>
            </td>
          </tr>
        </table>

      </td>
    </tr>
    <tr>
      <?php
      include("footer.php");
      ?>
  </table>
</body>
</head>

</html>