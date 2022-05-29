<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>PRISON REPORTS </title>
  <link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
  <table align="center" border="1" bgcolor="#937541" width="800" cellpadding="8" cellspacing="0" height="515">
    <tr>
      <td colspan="1" height="246"><img src="banner.gif" width="860" height="300"></td>
    </tr>
    <tr>
      <td colspan=" 8" bgcolor="green" height="3" align="center">



        <font size="5">
          <a href="../index.php">Logout</a> |
          <a href="adminpanel.php">Admin Panel</a>|
        </font>

      </td>

    </tr>

    <td align="center" bgcolor="green">
      <h2>

        <table align="center" border="0" bgcolor="black" width="600" height="100">

          <tr>
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <div class="navbar-header">
                  <div class="container-brand" href="#">YOU CAN DOWNLOAD REPORT OF ALL</a>
                  </div>
                  <div>
                    <ul class="nav navbar-nav">
                      <td>
                        <li class="active"><a href="prisonerep.php"><button>Prisoners Report</button></a></li>
                      </td>
                      <td>
                        <li><a href="transferrep.php"><button>Transfer Report</button></a></li>
                      </td>
                      <td>
                        <li><a href="courtrep.php"><button>Court Report</button></a></li>
                      </td>
                      <td>
                        <li><a href="../officer/visitorep.php"><button>Visitors Report</button></a></li>
                      </td>
                      <td>
                        <li><a href="Officerrep.php"><button>Officers Report</button></a></li>
                      </td>
                      <td>
                        <li><a href="newprisonrep.php"><button>Prisons Report</button></a></li>
                      </td>
                      <td>
                        <li><a href="logsrep.php"><button>Logs Report</button></a></li>
                      </td>
                    </ul>
                  </div>
                </div>
            </nav>
    </td>
    </tr>
  </table>




  <tr>
    <td bgcolor="#937541" colspan="3" align="center">
      <?php
      include("footer.php");
      ?>
  </tr>
  </table>
</body>

</html>