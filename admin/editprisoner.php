<?php

function valid(
    $Nid,
    $Fname,
    $photo,
    $datein,
    $dateout,
    $category,
    $dateofbirth,
    $address,
    $county,
    $Gender,
    $education,
    $status,
    $sentence,
    $Filenum,
    $prison,
    $offence
) {


?>
    <!DOCTYPE HTML>
    <html>

    <head>
        <title>Edit Records</title>
    </head>

    <body bgcolor="#006600">
        <?php

        $error = error_get_last();
        if ($error != '') {
            echo '<div style="padding:4px; border:1px solid red; color:red;">' . $error . '</div>';
        }
        ?>

        <form action="" method="post">
            <input type="hidden" name="Nid" value="<?php echo $Nid; ?>" />

            <table border="1" align="center" bgcolor="#CCCCCC">
                <tr>
                    <td colspan="2" align="center"><b>
                            <font color='green'>EDIT PRISONER DETAILS </font>
                        </b></td>
                </tr>
                <tr>
                <tr>
                    <td width="25%" bgcolor="#FFFFFF">&nbsp;&nbsp;
                    <td width="50%" align="left" bgcolor="white">

                        <div id="content" class="ctrdiv">
                            <form id="frmReg" method="POST" action="" enctype="multipart/form-data">

                                <div class="control_input">
                                    <label for="photo">Photo </label>
                                    <input type="file" id="photo" name="photo" class="reg_fields" value="<?php echo $photo; ?>" />

                                </div>
                                <div class="control_input">
                                    <label for="Nid" class="label">National Id </label>
                                    <input type="text" id="Nid" name="Nid" class="reg_fields" placeholder="00001111" value="<?php echo $Nid; ?>" />
                                </div>
                                <div class="control_input">
                                    <label for="Fname" class="label">Full Name </label>
                                    <input type="text" id="Fname" name="Fname" class="reg_fields" placeholder="Otienno jin" value="<?php echo $Fname; ?>" />
                                </div>
                                <div class="control_input">
                                    <div style="display: inline-block;">
                                        <table>
                                            <tr>
                                                <td>
                                                    <label for="date" class="label">Birth Date </label>
                                                </td>
                                                <td>
                                                    <input type="date" id="1date" name="1date" value="<?php echo $dateofbirth; ?>" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;" />

                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="control_input">
                                    <label for="category">Category </label>
                                    <select id="category" name="category" class="reg_fields" value="<?php echo $category; ?>">

                                        <!--Have not yet been convicted--->
                                        <option>Remands</option>

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
                                                    <label for="datein" class="label">Date In </label>
                                                </td>
                                                <td style="margin: 0; padding: 0;">
                                                    <input type="date" id="2date" name="2date" value="<?php echo $datein; ?>" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">

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
                                                    <label for="opendate" class="label">Date Out </label>
                                                </td>
                                                <td style="margin: 0; padding: 0;">
                                                    <input type="date" id="3date" name="3date" value="<?php echo $dateout; ?>" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">

                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="control_input">
                                    <label for="address" class="label">Address </label>
                                    <input type="text" id="address" value="<?php echo $address; ?>" name="address" class="reg_fields" placeholder="Rongai" />
                                </div>

                                <div style="display: inline-block;">
                                    <table>
                                        <tr>
                                            <td>
                                                <label for="county" class="label">County </label>
                                            </td>
                                            <td>
                                                <input type="text" id="county" value="<?php echo $county; ?>" name="county" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;" />


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
                            <select id="Gender" name="Gender" value="<?php echo $Gender; ?>" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
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
                            <select id="education" name="education" value="<?php echo $education; ?>" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
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
                            <select id="status" name="status" value="<?php echo $status; ?>" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
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
                <textarea cols="17" rows="4" name="offence" value="<?php echo $offence; ?>" placeholder="fill this box"></textarea>
            </div>

            <div style="display: inline-block;">
                <table>
                    <tr>
                        <td>
                            <label for="opendate" class="label">Sentence</label>
                        </td>
                        <td style="margin: 0; padding: 0;">
                            <input type="text" id="sentence" value="<?php echo $sentence; ?>" name="sentence" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;" />

                        </td>
                    </tr>

                    </td>
                    </tr>
                </table>
            </div></br>


            <div class="control_input">
                <label for="Filenum" class="label">File Number</label>
                <input type="text" id="Filenum" name="Filenum" value="<?php echo $Filenum; ?>" class="reg_fields" placeholder="xxx" />
            </div>

            <div class="control_input">

                <div style="display: inline-block;">
                    <table>
                        <td>
                            <label for="Campus" class="label">Prison</label>
                        </td>
                        <td style="margin: 0; padding: 0;">
                            <select id="prison" name="prison" value="<?php echo $prison; ?>" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
                                <option value="">--Select prison--</option>
                                <option>
                                    <?php
                                    $con = mysqli_connect('localhost', 'prison', 'prison123.', 'prison_system');

                                    $msql = mysqli_query($con, "SELECT * FROM newprison");
                                    while ($m_row = mysqli_fetch_array($msql))
                                        echo ("<option value = '" . $m_row['pname'] . "'>" . $m_row['pname'] . "</option>");
                                    ?>
                                </option>
                            </select>

                        </td>
                        </tr>

                        <tr align="center">
                            <td><label>
                                    <input type="submit" name="submit" value="Update">
                                </label></td>
                            <td align="center">
                                <a href='viewprisoners.php'><input type="button" name="" value="Back"></a>
                            </td>
                        </tr>
                    </table>
        </form>
    </body>

    </html>



<?php
}

$link = mysqli_connect("localhost", "prison", "prison123.", "prison_system");

if (isset($_POST['submit'])) {

    if (is_numeric($_POST['Nid'])) {


        //use this one from form
        $Nid = $_POST['Nid'];
        $Category = mysqli_real_escape_string($link, htmlspecialchars($_POST['category']));
        $Sentence = mysqli_real_escape_string($link, htmlspecialchars($_POST['sentence']));
        $offence = mysqli_real_escape_string($link, htmlspecialchars($_POST['offence']));
        $Filenum = mysqli_real_escape_string($link, htmlspecialchars($_POST['Filenum']));
        $Fname = mysqli_real_escape_string($link, htmlspecialchars($_POST['Fname']));
        $photo = mysqli_real_escape_string($link, htmlspecialchars($_POST['photo']));
        $dateofbirth = mysqli_real_escape_string($link, htmlspecialchars($_POST['1date']));
        $datein = mysqli_real_escape_string($link, htmlspecialchars($_POST['2date']));
        $dateout = mysqli_real_escape_string($link, htmlspecialchars($_POST['3date']));
        $address = mysqli_real_escape_string($link, htmlspecialchars($_POST['address']));
        $county = mysqli_real_escape_string($link, htmlspecialchars($_POST['county']));
        $Gender = mysqli_real_escape_string($link, htmlspecialchars($_POST['Gender']));
        $education = mysqli_real_escape_string($link, htmlspecialchars($_POST['education']));
        $status = mysqli_real_escape_string($link, htmlspecialchars($_POST['status']));
        $prison = mysqli_real_escape_string($link, htmlspecialchars($_POST['prison']));


        //use this from database 
        if ($Nid == '' || $Filenum == '' || $Category == '' || $offence == '' || $Sentence == '' || $photo == '') {

            $error = 'ERROR: Please fill in all required fields!';

            // use this 2nd from database
            valid(
                $Nid,
                $Fname,
                $photo,
                $dateofbirth,
                $Category,
                $datein,
                $dateout,
                $address,
                $county,
                $Gender,
                $education,
                $status,
                $Sentence,
                $Filenum,
                $prison,
                $offence,
                $error
            );
        } else {

            // use code update db
            mysqli_query($link, "UPDATE registration WHERE id='$Nid' SET,
            category='$Category',
            photo='$photo',
            Full_Name = '$Fname',  
            DOB = '$dateofbirth', 
            datein = '$datein',             
            dateout = '$dateout',
            Address = '$address',
            County = '$county',
            Gender = '$Gender',
            Education = '$education',
            Marital = '$status',
            Offence = '$offence',
            Sentence = 'Sentence',
            File_num = '$Filenum',
            prison = '$prison'  ")
                or die(mysqli_connect_error());

            header("Location: viewprisoners.php");
        }
    } else {

        echo 'Error!';
    }
} else {

    //use this 
    if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {

        //use the second code 
        $Nid = $_GET['id'];

        //user the second
        $result = mysqli_query($link, "SELECT * FROM registration WHERE id=$Nid")
            or die(mysqli_connect_error());
        $row = mysqli_fetch_array($result);


        if ($row) {
            $Nid = $row['id'];
            $Fname = $row['Full_Name'];

            $dateofbirth = $row['DOB'];
            $datein = $row['datein'];
            $dateout = $row['dateout'];
            $category = $row['category'];
            $address = $row['Address'];
            $county = $row['County'];
            $Gender = $row['Gender'];
            $education = $row['Education'];
            $status = $row['Marital'];
            $sentence = $row['Sentence'];
            $offence = $row['Offence'];
            $Filenum = $row['File_num'];
            $prison = $row['prison'];
            $photo = $row['photo'];

            //use the second code 
            valid(
                $Nid,
                $Fname,
                $photo,
                $datein,
                $category,
                $dateout,
                $address,
                $county,
                $Gender,
                $education,
                $status,
                $dateofbirth,
                $sentence,
                $Filenum,
                $prison,
                $offence,
                ''
            );
        } else {
            echo "No results!";
        }
    } else {
        echo 'Error!33';
    }
}
?>