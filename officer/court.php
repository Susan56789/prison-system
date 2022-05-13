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
					<a href="officerpanel.php">HOME</a>
					<a href="transfer.php">TRANSFER</a>
				</font>
			</td>
		</tr>
		<tr>
			<td>
				<h2 class="bg-primary" align="center">COURT VERDICTS FORM</h2>
				<form action="validatecourt.php" method="post">
					<table bgcolor="white" height="431" border="0" align="center" width="50%">
						<td width="34%" bgcolor="#FFFFFF"><b>National Id:</b></td>
						<td width="66%" bgcolor="#FFFFFF">
							<select name="Nationalid" placeholder="99999">
								<option>---Select---</option>
								<option>
									<?php
									$con = mysqli_connect('localhost', 'root', '', 'prison_system');

									$msql = mysqli_query($con, "SELECT * FROM registration ");
									while ($m_row = mysqli_fetch_array($msql))
										echo ("<option value = '" . $m_row['id'] . "'>" . $m_row['id'] . "</option>");
									?>
								</option>
							</select>
							</b>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF"><b>File Number:</b>
			</td>
			<td bgcolor="#FFFFFF">
				<select name="Filenum" placeholder="NBI-9999">
					<option>-----Select -----</option>
					<option>
						<?php
						$con = mysqli_connect('localhost', 'root', '', 'prison_system');

						$msql = mysqli_query($con, "SELECT * FROM registration");
						while ($m_row = mysqli_fetch_array($msql))
							echo ("<option value = '" . $m_row['File_num'] . "'>" . $m_row['File_num'] . "</option>");
						?>
					</option>
				</select>
			</td>
		</tr>
		<!-- <tr> 
<td bgcolor="#FFFFFF"><b>Date Of Trial:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="dot" /></td>
</tr>-->
		<tr>
			<td><label for="on"><b>Date Of Trial:</b></label>
			<td><select name="month">
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
				</select></td>
			<td>
				<input type="text" name="day" size=4 maxlength=2 placeholder="DD" />
			</td>

			<td><select name="year">
					<option selected="selected" value="01">2014</option>
					<option value="02">2015</option>
					<option>2016</option>
					<option>2017</option>
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
					<option>2021</option>
					<option>2022</option>
			</td>

			</select>
			</td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF"><b>Sentence:</b></td>
			<td>
				<input type="text" name="sentence" />

			</td>
		</tr>

		<tr>
			<td bgcolor="#FFFFFF"><b>Court Location:</b></td>
			<td> <select name="location">
					<option>Milimani Court</option>
					<option>Kibera Court</option>
					<option>Maseno Court</option>
					<option>Kwale Court</option>
					<option>Kisumu Court</option>
					<option>Shanzu Court</option>
			</td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF"><b>Judge Name:</b></td>
			<td bgcolor="#FFFFFF"><input type="text" name="judge" placeholder="Jury President" size=25 maxlength=25></td>
		</tr>

		<td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="SAVE" /></td>
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