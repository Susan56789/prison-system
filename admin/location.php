<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Prison Management System</title>
	<link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
	<table align='center' border='0' bgcolor='green' width='820' cellpadding='10' cellspacing='0' height='325'>

		<tr>
			<td colspan='3' height='2'><img src='banner.gif' width="860" height="300"></td>
		</tr>
		<tr>
			<td colspan="7" bgcolor="#yellow" height="1" align="center">
				<h1>
					<font size="5">
						<a href="adminpanel.php">Home</a> |

						<a href="search-form.php">Search </a>

						<a href="announce.php">Complain</a>|
						<a href="transfer.php">Prisoner Trans </a> ||

						<a href="court.php">Court</a>
					</font>
				</h1>
			</td>
			</td>

			<td height='1' colspan='3' align='right' bgcolor="#006600">&nbsp;</td>

		</tr>

		<tr>

			<td width='4%' bgcolor='#FFFFFF' valign='top'>
				<h3 align='center' title='You should be online'>&nbsp;</h3>
			</td>

			<td width='11%' valign='top' bgcolor="#FFFFFF">

				<p align='center'>



					<br />
				<div id="content">
					<div id="gallerycontainer">
						<div class="portfolio-area" style="margin:0 auto; padding:140px 20px 20px 20px; width:720px;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.90622136444!2d36.8946376!3d-1.1769666!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11bc4ddfa59a7039!2sKamiti%20Maximum%20Security%20Prison!5e0!3m2!1sen!2ske!4v1653158420182!5m2!1sen!2ske" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br />

							<small><a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.90622136444!2d36.8946376!3d-1.1769666!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11bc4ddfa59a7039!2sKamiti%20Maximum%20Security%20Prison!5e0!3m2!1sen!2ske!4v1653158420182!5m2!1sen!2ske" style="color:#0000FF;text-align:left">View Larger Map</a></small>
							<div class="column-clear"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<br>
			</td>
			<td width='75%' bgcolor='green' valign='top'>
				<table border='0' align='center'>
					<tr>
						<td width="552" bgcolor="green">
							<h3> Admin Management : </h3><br />
							<ul>

								<li><a href='viewprisoners.php'><b>Prisoners Information Display</b></a></li>
								<br>
								<li><a href='viewcase.php'><b>Case Information View</b></a></li>
								<br>
								<li><a href='viewtransfer.php'><b>Prisoners Transfer Information</b></a></li>
								<br>
								<li><a href='viewAnnounce.php'><b>View Comment</b></a></li>
								<br>
								<li><a href='../index.php''><b>LOG OUT</b></a></li>
</ul>
</td>
</tr>
</table>


			
			</td>
          </tr>
          <tr>
            <td colspan=' 3' align='center' bgcolor='#FF0000' height='1'>

										<?php
										include("Footer.php");
										?>
					</tr>
			</td>
		</tr>
	</table>
</body>


</html>