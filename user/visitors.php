<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="style1.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="screen" href="login.css">
</head>

<body>

    <table align="center" border="0" bgcolor="white" width="400" cellpadding="9" cellspacing="0" height="525">
        <tr>
            <td colspan="2" height="2"><img src="../banner.gif" width="860">
            </td>
        </tr>
        <tr>
            <td colspan="3" bgcolor="#FF0000" height="1" align="center">
                <font size="4">
                    <a href="userpanel.php">HOME</a>
                </font>
            </td>
        </tr>
        <tr>
            <td width="25%" bgcolor="#FFFFFF">&nbsp;&nbsp;
            <td width="50%" align="left" bgcolor="white">

                <div id="content" class="ctrdiv">
                    <form id="frmReg" method="POST" action="validatevisitor.php">
                        <h2 id="hdr_title">Visitors Registration Form </h2>
                        <div class="control_input">
                            <label for="id" class="label">Natioanal Id</label><input type="text" id="id" name="id" size=14 maxlength=8 class="reg_fields" placeholder="12345678" />
                        </div>
                        <div class="control_input">
                            <label for="fullname" class="label">Full Name</label><input type="text" id="fullname" name="fullname" class="reg_fields" placeholder="John otieno" />
                        </div>
                        <div class="control_input">
                            <label for="address" class="label">Address</label><input type="text" id="address" name="address" class="reg_fields" placeholder="langata" />
                        </div>


                        <div class="control_input">
                            <div style="display: inline-block;">
                                <table>
                                    <tr>
                                        <td>
                                            <label for="uemail" class="label">Date</label>
                                        </td>
                                        <td style="margin: 0; padding: 0;">
                                            <select id="lMonth" name="lMonth" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
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
                                        </td>
                                        <td>
                                            <input type="text" id="txtDay" name="txtDay" style="width: 40px;" value="DD" class="reg_fields" />
                                            <input type="text" id="txtYear" name="txtYear" style="width: 60px;" value="YYYY" class="reg_fields" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="control_input">
                            <div style="display: inline-block;">
                                <table>
                                    <td>
                                        <label for="timein" class="label">Time In</label>
                                    </td>
                                    <td style="margin: 0; padding: 0;">
                                        <select id="timein" name="timein" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
                                            <option>12:00pm</option>
                                            <option>12:30pm</option>
                                            <option>1:00pm</option>
                                            <option>1:30pm</option>
                                            <option>2:00pm</option>
                                            <option>2:30pm</option>
                                            <option>3:00pm</option>
                                            <option>3:30pm</option>
                                            <option>4:00pm</option>
                                            <option>4:30pm</option>
                                            <option>5:00pm</option>

                                        </select>
                                    </td>
                                </table>
                            </div class="control_input">

                            <div class="control_input">
                                <div style="display: inline-block;">
                                    <table>
                                        <td>
                                            <label for="timeout" class="label">Time Out</label>
                                        </td>
                                        <td style="margin: 0; padding: 0;">
                                            <select id="timeout" name="timeout" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
                                                <option>12:00pm</option>
                                                <option>12:30pm</option>
                                                <option>1:00pm</option>
                                                <option>1:30pm</option>
                                                <option>2:00pm</option>
                                                <option>2:30pm</option>
                                                <option>3:00pm</option>
                                                <option>3:30pm</option>
                                                <option>4:00pm</option>
                                                <option>4:30pm</option>
                                                <option>5:00pm</option>

                                            </select>
                                        </td>
                                    </table>
                                </div class="control_input">

                                <div class="control_input">
                                    <label for="uemail" class="label">Telephone No.</label><input type="tel" id="telephone" name="telephone" size=11 maxlength=11 class="reg_fields" placeholder="074565558" class="reg_fields" />
                                </div class="control_input">



                                <div class="control_input">
                                    <div style="display: inline-block;">
                                        <table>
                                            <td>
                                                <label for="campus" class="label">relationship</label>
                                            </td>
                                            <td style="margin: 0; padding: 0;">
                                                <select id="relationship" name="relationship" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
                                                    <option>Parent</option>
                                                    <option>Friend</option>
                                                    <option>Wife</option>
                                                    <option>Husband</option>
                                                    <option>Daughter/Son</option>
                                                    <option>Relative</option>
                                                    <option>other</option>
                                                </select>
                                            </td>
                                        </table>
                                    </div class="control_input">

                                    <div class="control_input">
                                        <div style="display: inline-block;">
                                            <table>
                                                <td>
                                                    <label for="campus" class="label">Prisoner Name</label>
                                                </td>
                                                <td style="margin: 0; padding: 0;">
                                                    <input type="text" id="prisoner" name="prisoner" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;" />

                                                </td>
                                            </table>
                                        </div class="control_input">



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