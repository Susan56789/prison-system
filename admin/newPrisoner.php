<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="style1.css" rel="stylesheet" type="text/css" />
    <script src="jquery-1.7.1.min.js"></script>
    <script src="registration_script.js"></script>
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
                    <form id="frmReg" method="POST" action="prisonerval.php">
                        <h2 id="hdr_title">Register Prisoner </h2>
                        <div class="control_input">
                            <label for="Nid" class="label">National Id</label><input type="text" id="Nid" name="Nid" size=8 maxlength=8 class="reg_fields" placeholder="00001111" />
                        </div>
                        <div class="control_input">
                            <label for="Fname" class="label">Full Name</label><input type="text" id="Fname" name="Fname" class="reg_fields" placeholder="Otienno jin" />
                        </div>

                        <div class="control_input">
                            <div style="display: inline-block;" id="lMonth">
                                <table>
                                    <tr>
                                        <td>
                                            <label for="date" class="label">Birth Date</label>
                                        </td>
                                        <td style="margin: 0; padding: 0;">
                                            <select id="1Month" name="1Month" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
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
                                    <tr>
                                        <td>
                                            <label for="datein" class="label">Date In</label>
                                        </td>
                                        <td style="margin: 0; padding: 0;">
                                            <select id="2Month" name="2Month" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
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
                                            <input type="text" id="TxtDay" name="TxtDay" style="width: 40px;" value="DD" class="reg_fields" />
                                            <input type="text" id="TxtYear" name="TxtYear" style="width: 60px;" value="YYYY" class="reg_fields" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="control_input">
                            <div style="display: inline-block;">
                                <table>
                                    <tr>
                                        <td>
                                            <label for="opendate" class="label">Date Out</label>
                                        </td>
                                        <td style="margin: 0; padding: 0;">
                                            <select id="3Month" name="3Month" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
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
                                            <input type="text" id="TXtDay" name="TXtDay" style="width: 40px;" value="DD" class="reg_fields" />
                                            <input type="text" id="TXtYear" name="TXtYear" style="width: 60px;" value="YYYY" class="reg_fields" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="control_input">
                            <label for="address" class="label">Address</label><input type="text" id="address" name="address" class="reg_fields" placeholder="Rongai" />
                        </div>

                        <div style="display: inline-block;">
                            <table>
                                <tr>
                                    <td>
                                        <label for="county" class="label">County</label>
                                    </td>
                                    <td style="margin: 0; padding: 0;">
                                        <select id="county" name="county" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
                                            <option selected="selected">Lamu</option>
                                            <option>Nairobi</option>
                                            <option>Nakuru</option>
                                            <option>Mombassa</option>
                                            <option>Machakos</option>
                                            <option>Malindi</option>
                                            <option>Mandera</option>
                                            <option>Meru</option>
                                            <option>Laikipia</option>
                                            <option>Nyeri</option>
                                    </td>
                                </tr>
                                </select>
            </td>
        </tr>
    </table>
    </div></br>

    <div style="display: inline-block;">
        <table>
            <tr>
                <td>
                    <label for="opendate" class="label">Gender</label>
                </td>
                <td style="margin: 0; padding: 0;">
                    <select id="Gender" name="Gender" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
                        <option selected="selected">Male</option>
                        <option>Female</option>
                    </select>
                </td>
            </tr>
        </table>
    </div></br>

    <div style="display: inline-block;">
        <table>
            <tr>
                <td>
                    <label for="opendate" class="label">Education Level</label>
                </td>
                <td style="margin: 0; padding: 0;">
                    <select id="education" name="education" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
                        <option selected="selected">KCPE</option>
                        <option>Never</option>
                        <option>KCSE</option>
                        <option>Certificate</option>
                        <option>Diploma</option>
                        <option>Bachelor Degree</option>
                        <option>PHD</option>
                        <option>Masters</option>
                </td>
            </tr>
            </select>
            </td>
            </tr>
        </table>
    </div></br>

    <div style="display: inline-block;">
        <table>
            <tr>
                <td>
                    <label for="status" class="label">Maritial Status</label>
                </td>
                <td style="margin: 0; padding: 0;">
                    <select id="status" name="status" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
                        <option selected="selected">Engaged</option>
                        <option>Divorced</option>
                        <option>Married</option>
                        <option>Single</option>
                        <option>In Relationship</option>
                </td>
            </tr>
            </select>
            </td>
            </tr>
        </table>
    </div></br>






    <div class="control_input">
        <label for="Pname" class="label">Offence</label>
        <textarea cols="17" rows="4" name="offence" placeholder="fill this box"></textarea>
    </div>

    <div style="display: inline-block;">
        <table>
            <tr>
                <td>
                    <label for="opendate" class="label">Sentence</label>
                </td>
                <td style="margin: 0; padding: 0;">
                    <input type="text" id="sentence" name="sentence" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;" />

                </td>
            </tr>

            </td>
            </tr>
        </table>
    </div></br>


    <div class="control_input">
        <label for="Filenum" class="label">File Number</label>
        <input type="text" id="Filenum" name="Filenum" size=8 maxlength=8 class="reg_fields" placeholder="xxx" />
    </div>

    <div class="control_input">
        <div style="display: inline-block;">
            <table>
                <td>
                    <label for="Campus" class="label">Prison</label>
                </td>
                <td style="margin: 0; padding: 0;">
                    <select id="prison" name="prison" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
                        <option value="">--Select prison--</option>
                        <option>
                            <?php
                            $con = mysqli_connect('localhost', 'root', '', 'prison_system');

                            $msql = mysqli_query($con, "SELECT * FROM newprison");
                            while ($m_row = mysqli_fetch_array($msql))
                                echo ("<option value = '" . $m_row['pname'] . "'>" . $m_row['pname'] . "</option>");
                            ?>
                        </option>
                    </select>
                </td>
            </table>
        </div class="control_input">



        <div class="control_input">
            <input type="submit" name="signup" id="Add" value="Add " title="" border="0">
        </div>

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