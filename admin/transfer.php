<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<title> Transfer Form</title>
	<link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
	<table width="60%" height="91" border="1" align="center" bgcolor="#FFFFFF">
		<tr>
			<td height="33" align="center" bgcolor="green">
				<font size="5">
					<a href="adminpanel.php">HOME</a>


				</font>
			</td>

		</tr>
		<td height="5" bgcolor="#FFFFFF">
			<tr>
				<td>
					<h2 class="bg-primary" align="center">TRANSFER FORM FOR PRISONNER</h2>
					<form action="validatetransfer.php" method="post">
						<table bgcolor="white" height="431" border="0" align="center" width="50%">
							<td width="34%" bgcolor="#FFFFFF"><b>National Id:</b></td>
							<td width="66%" bgcolor="#FFFFFF">
								<select name="Nid" placeholder="000999">
									<option value="">--Select your National Id--</option>
									<?php
									$conn = mysqli_connect('localhost', 'prison', 'prison123.', "prison_system");

									$msql = mysqli_query($conn, "SELECT * FROM registration");
									while ($m_row = mysqli_fetch_array($msql))
										echo ("<option value = '" . $m_row['id'] . "'>" . $m_row['id'] . "</option>");
									?>
								</select>
							</td>
			</tr>
		<td width="34%" bgcolor="#FFFFFF"><b>File Number:</b></td>
		<td width="66%" bgcolor="#FFFFFF">
			<select type="text" name="Filenum" placeholder="NB-9999">
				<option>--Select your File--</option>

				<?php
				$con = mysqli_connect('localhost', 'root', '', 'prison_system');

				$msql = mysqli_query($con, "SELECT * FROM registration");
				while ($m_row = mysqli_fetch_array($msql))
					echo ("<option value = '" . $m_row['File_num'] . "'>" . $m_row['File_num'] . "</option>");
				?>

			</select>
		</td>
		</tr>

		<tr>
			<td bgcolor="#FFFFFF"><b>From Prison:</b></td>
			<td> <select name="From">
					<option>---Select prison---</option>

					<?php
					$con = mysqli_connect('localhost', 'root', '', 'prison_system');

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
						$con = mysqli_connect('localhost', 'root', '', 'prison_system');

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
				<select name="month">
					<option selected="selected" value="01">January</option>
					<option value="02">February</option>
					<option value="03">March</option>
					<option value="04">April</option>
					<option value="05">May</option>
					<option value="06">June</option>
					<option value="07">July</option>
					<option value="08">August</option>
					<option value="09">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>

				<input type="text" name="day" size=4 maxlength=2 placeholder="DD" />


				<select name="year">
					<option selected="selected">2019</option>
					<option>2020</option>
					<option>2021</option>
					<option>2022</option>
					<option>2023</option>
					<option>2024</option>
				</select>
			</td>
			<!-- di -->
			</select>
			</td>
		</tr>

		<!-- <tr>
<td bgcolor="#FFFFFF"><b>Date of Transfer:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="dot" /></td>
</tr>
 -->
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