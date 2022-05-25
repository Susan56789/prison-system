<!DOCTYPE html>
<html>

<head>

    <head>

        <link href="style1.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" media="screen" href="login.css">
    </head>

<body>

    <table align="center" border="0" bgcolor="white" width="400" cellpadding="9" cellspacing="0" height="600">
        <tr>
            <td colspan="2" height="2"><img src="../banner.gif" width="860"></td>
        </tr>
        <tr>
            <td colspan="3" bgcolor="#FF0000" height="1" align="center">
                <font size="4">
                    <a href="userpanel.php">HOME</a> |
                </font>
            </td>
        </tr>
        <tr>
            <td width="25%" bgcolor="#FFFFFF">&nbsp;&nbsp;
            <td width="50%" align="center" bgcolor="white">

                <div id="content" class="ctrdiv">
                    <form id="frmReg" method="POST" action="prisonerval.php" enctype="multipart/form-data">
                        <h2 id="hdr_title">Register Prisoner </h2>
                        <div class="control_input">
                            <label for="photo">Photo</label>

                            <input type="file" name="photo" id="photo" />
                        </div>
                        <div class="control_input">
                            <label for="Nid" class="label">National Id</label>
                            <input type="text" id="Nid" name="Nid" class="reg_fields" placeholder="00001111" />
                        </div>
                        <div class="control_input">
                            <label for="Fname" class="label">Full Name</label>
                            <input type="text" id="Fname" name="Fname" class="reg_fields" placeholder="Otienno jin" />
                        </div>

                        <div class="control_input">
                            <div style="display: inline-block;" id="lMonth">
                                <table>
                                    <tr>
                                        <td>
                                            <label for="date" class="label">Birth Date</label>
                                        </td>
                                        <td style="margin: 0; padding: 0;">
                                            <input type="date" id="1date" name="1date" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">

                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="control_input">
                            <label for="">Category</label>
                            <select id="category" name="category" class="reg_fields">

                                <!--Have not yet been convicted--->
                                <option selected="selected">Remands</option>

                                <!---First offenders and well behaved.-->
                                <option>Star class</option>

                                <option>Ordinary class</option>

                                <!--Death row convicts.-->
                                <option>Special </option>

                                <!---Serving life sentences--->
                                <option>Lifers</option>

                                <option>Civil debtors</option>
                            </select>
                        </div>

                        <div class="control_input">
                            <div style="display: inline-block;">
                                <table>
                                    <tr>
                                        <td>
                                            <label for="datein" class="label">Date In</label>
                                        </td>
                                        <td style="margin: 0; padding: 0;">
                                            <input type="date" id="2date" name="2date" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">

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
                                            <input type="date" id="3date" name="3date" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">

                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="control_input">
                            <label for="address" class="label">Address</label>
                            <input type="text" id="address" name="address" class="reg_fields" placeholder="Rongai" />
                        </div>

                        <div style="display: inline-block;">
                            <table>
                                <tr>
                                    <td>
                                        <label for="county" class="label">County</label>
                                    </td>
                                    <td style="margin: 0; padding: 0;">
                                        <input type="text" id="county" name="county" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;" />


                                    </td>
                                </tr>

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
                <tr>
                    <td>
                        <label for="on"><b>Date Of Trial:</b></label>
                    <td>
                        <input type="date" name="date" id="date" />


                    </td>

                    </select>
                    </td>
                </tr>

                <tr>
                    <td bgcolor="#FFFFFF"><b>Court Location:</b></td>
                    <td>
                        <input type="text" name="location" id="location" />

                    </td>
                </tr>
                <tr>
                    <td bgcolor="#FFFFFF"><b>Lawyer's Name:</b></td>
                    <td bgcolor="#FFFFFF"><input type="text" name="judge" id="judge" placeholder="Lawyer" /></td>
                </tr>
            </table>
        </div>
        <br />
        <div class="control_input">
            <h4>Witness Section</h4>
            <label>Full Names</label>
            <input type="text" name="Fnames" id="Fnames" /><br />
            <label>ID Number</label>
            <input type="text" name="id" /><br />
            <label>Email Address</label>
            <input type="email" name="email" id="email" /><br />
            <label>Phone Number</label>
            <input type="tel" name="tel" id="tel" /><br />
        </div>
        <div class="control_input" align="center">
            <input type="submit" name="signup" id="Add" value="Add " title="" border="0">
        </div>
        </table>
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