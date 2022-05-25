<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Court form</title>
	<link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
	<table border="1" bgcolor="#FFFFFF" align="center" width="54%">
		<tr bgcolor="#FF0000">
			<td align="center">
				<font size="5">
					<a href="adminpanel.php">HOME</a>
					<a href="transfer.php">TRANSFER</a>
				</font>
			</td>
		</tr>
		<tr>
			<td>
				<h2 class="bg-primary" align="center">COURT SCHEDULING FORM</h2>
				<form action="validatecourt.php" method="post">
					<table bgcolor="white" height="431" border="0" align="center" width="50%">
						<td width="34%" bgcolor="#FFFFFF"><b>National Id:</b>
						</td>
						<td width="66%" bgcolor="#FFFFFF">
							<input type="text" name="Nationalid" placeholder="99999" />
						</td>
		</tr>


		<tr>
			<td>
				<label for="on"><b>Date Of Trial:</b></label>
			<td>
				<input type="date" name="date" id="date" />


			</td>

			</select>
			</td>
		</tr>


		<tr>
			<td bgcolor="#FFFFFF"><b>Court Location:</b></td>
			<td>
				<input type="text" name="location" />

			</td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF"><b>Judge Name:</b></td>
			<td bgcolor="#FFFFFF"><input type="text" name="judge" placeholder="Jury President" /></td>
		</tr>

		<td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" name="submit" value="SAVE" /></td>
		</tr>
	</table>
	</form>
	</td>
	</tr>
	<tr>
		<?php
		include("footer.php");
		?>

	</tr>
	</table>
</body>

</html>