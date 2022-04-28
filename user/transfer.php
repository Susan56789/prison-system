<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title> Transfer Form</title>
	<link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
	<table width="60%" height="91" border="1" align="center" bgcolor="#FFFFFF">
		<tr>
			<td height="33" align="center" bgcolor="green">
				<font size="5">
					<a href="userpanel.php">HOME</a>

				</font>
			</td>
		</tr>
		<td height="5" bgcolor="#FFFFFF">
			<tr>
				<td>
					<h2 class="bg-primary" align="center">TRANSFER FORM FOR PRISONNER</h2>
					<form action="validatetransfer.php" method="post">
						<table bgcolor="white" height="431" border="0" align="center" width="50%">
							<td width="34%" bgcolor="#FFFFFF"><b>National Id:</b>
							</td>
							<td width="66%" bgcolor="#FFFFFF"><input type="text" size=7 maxlength=5 name="Nid" placeholder="000999" /></td>
			</tr>
		<td width="34%" bgcolor="#FFFFFF"><b>File Number:</b></td>
		<td width="66%" bgcolor="#FFFFFF"><input type="text" size=7 maxlength=8 name="Filenum" placeholder="NB-9999" /></td>
		</tr>

		<tr>
			<td bgcolor="#FFFFFF"><b>From Prison:</b></td>
			<td> <select name="From">
					<option>LANGATA</option>
					<option>KODIAGA</option>
					<option>SHIMOLATEWA</option>
			</td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF"><b>To Prison:</b></td>
			<td> <select name="To">
					<option>LANGATA</option>
					<option>KODIAGA</option>
					<option>SHIMOLATEWA</option>
			</td>
		</tr>

		<tr>
			<td><label for="on"><b>Date of Transfer:</b></label>
			<td>

				<input type="date" />
			</td>
		</tr>

		<td height="26" bgcolor="#FFFFFF" align="center">
			<input type="submit" value="Add" />
		</td>
		</tr>
	</table>
	</form>
	</td>
	<td bgcolor="#FFFFFF">
		</tr>
		<tr>
			<?php
			include("footer.php");
			?>

		</tr>
		</table>
</body>

</html>