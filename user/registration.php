<html>

<head>
	<title>registration form</title>
	<link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
	<table border="1" bgcolor="#FFFFFF" align="center" width="54%">
		<tr bgcolor="#FF0000">
			<td align="center">
				<font size="5">
					<a href="userpanel.php">HOME</a>
				</font>
			</td>
		</tr>
		<tr>
			<td>
				<h2 class="bg-primary" align="center">PRISONNER REGISTRATION FORM</h2>
				<div id="content">
					<form action="validatereg.php" method="post">
						<table bgcolor="white" height="450" border="0" align="center" width="65%">
							<tr>
							<tr>
								<td width="34%" bgcolor="#FFFFFF"><b>National Id:</b></td>
								<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Nid" size=8 maxlength=8 placeholder="XX111100" />


							</tr>
							<tr>
								<td bgcolor="#FFFFFF"><b>Full Name:</b></td>
								<td bgcolor="#FFFFFF"><input type="text" name="Fname" placeholder="Alexandia James" /></td>
							</tr>
							<tr>
								<td><label for="on"><b>Date of Birth:</b></label>
								<td>
									<input type="date" />
								</td>
							</tr>


		</tr>
		<tr>
		<tr>
			<td>
				<label for="on"><b>Date Out:</b></label>
			<td>
				<input type="date" />
			</td>
		</tr>
		<tr>

		<tr>
			<td bgcolor="#FFFFFF"><b>Address:</b></td>
			<td bgcolor="#FFFFFF"><input type="text" name="address" placeholder="address" /></td>
		</tr>
		<tr>
			<td bgcolor="#FFFFFF"><b>County:</b></td>
			<td> <select name="county">
					<option>Nairobi</option>
					<option>Nakuru</option>
					<option>Mombassa</option>
					<option>Machakos</option>
					<option>Malindi</option>
					<option>Mandera</option>
					<option>Meru</option>
			</td>
		</tr>
		<tr>
			<td><b>Gender</b></td>
			<td><b><input type="radio" name="Gender" value="Male" checked="checked">
					Male <input type="radio" name="Gender" value="Female"></b>
				<b>Female</b>
			</td>
		</tr>

		<tr>
			<td bgcolor="#FFFFFF"><b>Education Level:</b></td>
			<td> <select name="education">
					<option>Never</option>
					<option>O level</option>
					<option>Diploma</option>
					<option>Bachelor Degree</option>
					<option>Above</option>
			</td>
		</tr>

		<tr>
			<td bgcolor="#FFFFFF"><b>Marital Status:</b></td>
			<td> <select name="status">
					<option>Divorced</option>
					<option>Married</option>
					<option>Single</option>
			</td>
		</tr>

		<tr>
			<td bgcolor="#FFFFFF"><b>Offence</b></td>
			<td bgcolor="#FFFFFF">
				<font size="4">
					<textarea cols="17" rows="4" name="offence" placeholder="fill this box"></textarea>
		</tr>


		<tr>
			<td bgcolor="#FFFFFF"><b>Sentence:</b></td>
			<td bgcolor="#FFFFFF"><input type="text" name="sentence" maxlength=7 placeholder="2 Years" /></td>
		</tr>

		<tr>
			<td bgcolor="#FFFFFF"><b>File Number:</b></td>
			<td bgcolor="#FFFFFF"><input type="text" name="Filenum" maxlength=9 placeholder="NBI-001XX" /></td>
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