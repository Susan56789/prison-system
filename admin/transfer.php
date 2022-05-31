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
			<td align="center" border='1' bgcolor='brown'>
				<font size="5">
					<a href="adminpanel.php">HOME</a>


				</font>
			</td>

		</tr>
		<td height="5" bgcolor="#FFFFFF">
			<tr>
				<td>
					<h2 class="bg-primary" align="center">TRANSFER FORM FOR PRISONER</h2>
					<form action="validatetransfer.php" method="post">
						<table bgcolor="white" height="431" border="0" align="center" width="50%">
							<td width="34%" bgcolor="#FFFFFF"><b>National Id:</b></td>
							<td width="66%" bgcolor="#FFFFFF">
								<input type="text" name="Nid" placeholder="000999" />

							</td>
			</tr>


			<tr>
				<td bgcolor="#FFFFFF"><b>From Prison:</b></td>
				<td> <select name="From">
						<option>---Select prison---</option>

						<?php
						$con = mysqli_connect('localhost', 'prison', 'prison123.', 'prison_system');

						$msql = mysqli_query($con, "SELECT * FROM newprison");
						while ($m_row = mysqli_fetch_array($msql))
							echo ("<option value = '" . $m_row['pname'] . "'>" . $m_row['pname'] . "</option>");
						?>

				</td>
			</tr>
			<tr>
				<td bgcolor="#FFFFFF"><b>To Prison:</b></td>
				<td> <select name="To">
						<option>---Select prison---</option>
						<option>
							<?php
							$con = mysqli_connect('localhost', 'prison', 'prison123.', 'prison_system');

							$msql = mysqli_query($con, "SELECT * FROM newprison");
							while ($m_row = mysqli_fetch_array($msql))
								echo ("<option value = '" . $m_row['pname'] . "'>" . $m_row['pname'] . "</option>");
							?>
						</option>
				</td>
			</tr>

			<tr>
				<td><label for="on"><b>Date of Transfer:</b></label>
				</td>
				<td>
					<input type="date" name="date" />

				</td>
				<!-- di -->
				</select>
		</td>
		</tr>

		<td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="Add" /></td>
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