<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link rel="stylesheet" media="screen" href="login.css">
</head>
<body>
<table align="center" border="0" bgcolor="green" width="540" cellpadding="9" cellspacing="0" height="525">
    <tr>
      <td colspan="3" height="2"><img src="banner.gif" width="860" height="300"></td>
    </tr>
    <tr>
      <td bgcolor="brown" colspan="5" height="1" align="center">
        <font size="4">

          <a href="index.php">HOME</a> |
          <a href="login2.php">LOGIN</a>
        </font>
      </td>
    </tr>
<tr>
    <td bgcolor="#FFFFFF">
        <table width="408" height="142" border="0" align="center">
            <caption>RESET PASSWORD</caption>
        <form action="recovery.php" method="post">
            <tr>
                <td>
                <label for="Username">Username</label>
            <input type="text" name="username" /> 
                </td>
            </tr>
            <tr>
                <td><label for="email">Email</label>
            <input type="email" name="email" id="email" ></td>
            </tr>
<tr>
    <td><label for="user">Select User</label>
<select name="user" id="user">
<option>User</option>
    <option>Police</option>
    <option>Admin</option>
</select>
</td>
</tr>
<tr>
    <td>
        <label for="newPswd">New Password</label>
        <input type="password" name="Npassword" id="Npassword">
    </td>
</tr>
<tr>
    <td>
        <label for="newPasswd">Confirm New Password</label>
        <input type="password" name="confirm" id="confirm">
    </td>
</tr>

<tr>
                <td  height="36" bgcolor="#FFFFFF" align="center">
                  <input type="submit" value="SUBMIT" />
                </td>
              </tr>

        </form>
        </table>
    </td>
</tr>
    <tr>
      <?php
      include("footer.php");
      ?>
    </tr>
</body>
</html>