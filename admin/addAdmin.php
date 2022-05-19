<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="login.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="screen" href="login.css">
</head>

<body>


    <table align="center" border="0" bgcolor="white" width="400" cellpadding="9" cellspacing="0" height="525">
        <tr>
            <td colspan="2" height="2"><img src="../banner.gif" width="860"></td>
        </tr>
        <tr>
            <td colspan="3" bgcolor="#FF0000" height="1" align="center">
                <font size="4">
                    <a href="adminpanel.php">HOME</a> |
                </font>
            </td>
        </tr>
        <tr>
            <td width="25%" bgcolor="#FFFFFF">&nbsp;&nbsp;
            <td width="50%" align="center" bgcolor="white">

                <div id="content" class="ctrdiv">
                    <form id="frmReg" method="POST" action="validateadmin.php">
                        <h2 id="hdr_title">Admin Registration Form </h2>
                        <div class="control_input">
                            <label for="id" class="label">National ID</label>
                            <input type="text" name="id" id="id" />
                        </div>
                        <div class="control_input">
                            <label for='names'>UserName</label>
                            <input type="text" name="names" id="names" />
                        </div>
                        <div class="control_input">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="control_input">
                            <label for="telephone" class="label">Telephone No.</label>
                            <input type="text" id="telephone" name="telephone" />
                        </div>
                        <div class="control_input">
                            <label for="email" class="label">Email</label>
                            <input type="text" id="email" name="email" />
                        </div>
                        <div class="control_input">
                            <label for="address" class="label">Address</label>
                            <input type="text" id="address" name="address" />
                        </div>
                        <div class="control_input">
                            <label for="password" class="label">Password</label>
                            <input type="password" id="password" name="password" />
                        </div>
                        <div class="control_input">
                            <input type="submit" name="signup" id="signup" value="Submit" title="" border="0">
                        </div class="control_input">

                        <div id="validation_msg">
                        </div>
                    </form>
            </td>
        </tr>

        <tr>
            <?php
            include("Footer.php");
            ?>
        </tr>
    </table>
</body>

</html>