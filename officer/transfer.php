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
					<a href="officerpanel.php">HOME</a>

				</font>
			</td>
		</tr>
		<td>
			<tr>
				<td>
					<h2 class="bg-primary" align="center">TRANSFER FORM FOR PRISONER</h2>
					<form action="validatetransfer.php" method="post">
						<table bgcolor="white" height="431" border="0" align="center" width="50%">


							<tr>
								<td><b>National Id </b> </td>
								<td>
									<input type="text" name="Nid" id="Nid" />
								</td>
							</tr>



							<tr>
								<td>
									<b>From Prison:</b>
								</td>
								<td>
									<select name="From">
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
								<td>
									<b>To Prison:</b>
								</td>
								<td>
									<select name="To">
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
								<td>
									<label for="on"><b>Date of Transfer:</b></label>
								</td>
								<td>
									<input type="date" name="date" id="date" />

								</td>
							</tr>



							<td align="center">
								<input type="submit" name="submit" value="Add" />
							</td>
			</tr>
	</table>
	</form>
	</td>
	<td>
		</tr>
		<tr>
			<?php
			include("footer.php");
			?>

		</tr>
		</table>
</body>

</html>