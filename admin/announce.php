<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>COMPLAIN FORM</title>
    <link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
    <table width="74%" height="112" border="0" align="center" bgcolor="#FFFFFF">
        <tr>

        </tr>
        <?php
        include("menu.php");
        ?>
        <td>
            <form action="processannounce.php" method="post">
                <table bgcolor="white" height="300" border="0" align="center" width="60%">
                    <tr>
                        <td width="27%" height="46" bgcolor="#FFFFFF">
                            <b>Username:</b>
                        </td>
                        <td width="73%" bgcolor="#FFFFFF">
                            <input type="text" name="From" />
                        </td>
                    </tr>
                    <tr>
                        <td width="27%" height="46" bgcolor="#FFFFFF">
                            <b>To:</b>
                        </td>
                        <td width="73%" bgcolor="#FFFFFF">
                            <input type="text" name="To" />
                        </td>
                    </tr>

                    <tr>
                        <td height="51" bgcolor="#FFFFFF"><b>Subject:</b></td>
                        <td bgcolor="#FFFFFF"><input type="text" name="Subject"></td>
                    </tr>
                    <td height="3">
                        </tr>
                        <tr>
                            <td><strong><b>Message</b></strong></td>
                            <td bgcolor="#FFFFFF">
                                <>
                                    <textarea cols="17" rows="4" name="Message"></textarea>
                        </tr>
                    <td height="36" bgcolor="#FFFFFF" align="center"><input type="submit" value="Save" /></td>
                    <td height="26" bgcolor="#FFFFFF" align="center"><input type="reset" value="Cancel" /></td>
                    </tr>
                </table>
            </form>
        </td>

        </tr>
        <tr>
            <td align='center' colspan="3" bgcolor='gold' height='2'><?php
                                                                        include "Footer.php";
                                                                        ?>
            </td>
        </tr>
    </table>
</body>

</html>