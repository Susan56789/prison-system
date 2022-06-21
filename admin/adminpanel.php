<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
	<title>Prison Management System</title>
	<link rel="stylesheet" href="login.css">
</head>

<body>
	<table align='center' border='0' bgcolor='green' width='500' cellpadding='10' cellspacing='0' height='525'>

		<tr>
			<td colspan='3' height='2'><img src='banner.gif' width="860" height="300">
			</td>
		</tr>
		<tr>
			<td colspan="7" bgcolor="brown" height="1" align="center">
				<h1>
					

						<a href="Logged.php">Logs</a> |
						<a href="search-form.php">Search </a> |
						<a href="location.php">Location</a>|
						<a href="transfer.php">Prisoner Transfer</a>|
						<a href="court.php">Court</a>

					
				</h1>
				<h4 style="color:white; display:inline-block;"><?php echo "Hello " . $_SESSION['username'] . "!"  ?></h4>
			</td>
			</td>



		</tr>



		<tr>

			<td width='81%' valign='top' bgcolor="#FFFFFF">

				<p align='center'>


				<h3 align='center'>&nbsp;</h3>
				<br />
				<h3 align='center'>THIS FOR ADMINSITRATOR </h3>
				<p align='justify'>
					<font face='Arial, Helvetica, sans-serif'>
						The system enables an Administrator to provide services to
						users. The administrator can add and upload information,
						update, delete, view the recorded data.
					</font>
				</p>

				<br>
			</td>
			<td width='30%' bgcolor='green' valign='top'>


				<table border='1' align='center'>
					<tr>
						<td width="300" bgcolor="green">
							<h4> Admin Panel : </h4>


							<ul>
								<li><a href='newPrisoner.php'><b><button>New Prisoner</button></b></a></li>
								<br>
								<li><a href='viewprisoners.php'><b><button>Prisoners Details</button></b></a></li>
								<br>
								<li><a href='viewcase.php'><b><button>Case Details</button></b></a></li>
								<br>
								<li><a href='viewtransfer.php'><b><button>Transfer Information</button></b></a></li>
								<br>
								<li><a href='viewvisitors.php'><b><button>Visitors Information</button></b></a></li>
								<br>
								<li><a href='newprison.php'><b><button>Add Prison</button></b></a></li>
								<br>
								<li><a href='viewnewprison.php'><b><button>View Prisons</button></b></a></li>
								<br>
								<li><a href='addofficer.php'><b><button>Add Officer</button></b></a></li>
								<br>
								<li><a href='viewoff.php'><b><button>Officer details</button></b></a></li>
								<br>
								<li><a href='addAdmin.php'><b><button>Add Admin</button></b></a></li>
								<br>
								<li><a href='viewadmin.php'><b><button>View Admins</button></b></a></li>
								<br>
								<li><a href='viewAnnounce.php'><b><button>View Comment</button></b></a></li>
								<br>
								<li><a href='report.php'><b><button>Report</button></b></a></li>
								<br>
								<li><a href='../index.php''><b><button name="logout">LOG OUT</button></b></a></li>
</ul>
</td>
</tr>
</table>

			
			</td>
          </tr>
		  
          <tr>
			  <td bgcolor=' gold' colspan="4">
										<?php
                                        include("Footer.php");
                                        ?>
						</td>
					</tr>
				</table>
</body>

</html>