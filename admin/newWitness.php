<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Witness</title>
    <link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
    <div>
        <table align='center' border='1' bgcolor='green' width='800' cellpadding='8' cellspacing='0' height='200'>
            <tr>
                <td colspan="2" height="2"><img src="../banner.gif" width="700"></td>
            </tr>
            <tr>

                <td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>

                    <a href="viewcase.php" target="_parent">Court details</a>
                </td>

            </tr>

            <tr align="center" bgcolor="white">



                <td>
                    <h3>New Witness</h3>
                    <form action="valinatewitness.php" method="post">
                        <label>Full Names</label>
                        <input type="text" name="Fnames" id="Fnames" /><br /><br />
                        <label>ID Number</label>
                        <input type="text" name="id" /><br /><br />
                        <label>Email Address</label>
                        <input type="email" name="email" id="email" /><br /><br />
                        <label>Phone Number</label>
                        <input type="tel" name="tel" id="tel" /><br /><br />
                        <label>File Number</label>
                        <select name="Filenum">
                            <option>---Select Case---</option>
                            <?php
                            $con = mysqli_connect('localhost', 'prison', 'prison123.', 'prison_system');

                            $msql = mysqli_query($con, "SELECT * FROM registration");
                            while ($m_row = mysqli_fetch_array($msql))
                                echo ("<option value = '" . $m_row['File_num'] . "'>" . $m_row['File_num'] . "</option>");
                            ?>
                        </select><br /><br />
                        <label>Prisoner</label>
                        <select name="Nid">
                            <option>---Select Prisoner---</option>
                            <?php
                            $con = mysqli_connect('localhost', 'prison', 'prison123.', 'prison_system');

                            $msql = mysqli_query($con, "SELECT * FROM registration");
                            while ($m_row = mysqli_fetch_array($msql))
                                echo ("<option value = '" . $m_row['id'] . "'>" . $m_row['id'] . "</option>");
                            ?>
                        </select><br /><br />

                        <input type="submit" name="signup" id="Add" value="Save " title="" border="0">
                    </form>
                </td>
            </tr>
            <tr><?php
                include("footer.php");
                ?></tr>
        </table>
    </div>
</body>

</html>