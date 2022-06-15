<?php

//capture search term and remove spaces at its both ends if the is any
$searchTerm = trim($_GET["keyname"]);

//check whether the name parsed is empty
if ($searchTerm == "") {
    echo "Enter name you are searching for.";
    exit();
}

//database connection info
$host = "localhost"; //server
$db = "prison_system"; //database name
$user = "prison"; //dabases user name
$pwd = "prison123."; //password


//connecting to server and creating link to database
$link = mysqli_connect($host, $user, $pwd, $db);

//MYSQL search statement
//$query ="SELECT * FROM visitor WHERE id LIKE '%$searchTerm%'";
$query = "SELECT * FROM registration WHERE id LIKE '%$searchTerm%'";
$results = mysqli_query($link, $query);
echo '<body bgcolor="Gray">';
/* check whethere there were matching records in the table
by counting the number of results returned */
if (mysqli_num_rows($results) >= 1) {
    //$output = "";
    echo "<table align='center' width='100%' bgcolor='GREEN' border='0' 
	bgcolor='green' cellpadding='3' cellspacing='2' bgcolor='silver'>
	<caption><h3>PRISONER INFORMATION</h3></caption>
	<tr bgcolor='#CCCCCC'>
	<th width='15%'>Photo</th>
	<th width='10%'>National id</th>
	<th width='10%'>Category</th>
	<th width='15%'>Full Name</th>
	<th width='10%'>Date of Birth</th>
	<th width='15%'>Sentence</th>
	<th width='10%'>Date In</th>
	<th width='10%'>Date Out</th>
	<th width='15%'>Address</th>
	<th width='10%'>County</th>
	<th width='10%'>Gender</th>
	<th width='10%'>Education</th>
	<th width='10%'>Status</th>
	<th width='15%'>Offence</th>
	
	<th width='10%'>File Number</th>
	<th width='10%'>Prison</th>
	</tr>";

    while ($row = mysqli_fetch_array($results)) {
        echo "<tr bgcolor='grey'>";


        echo "<td><img src='../uploads/" . $row['photo'] . "' width='80' height='80'></td>";

        "</td>";
        echo  "<td width='10%'>" . $row['id'] . "</td>";
        echo  "<td width='10%'>" . $row['category'] . "</td>";
        echo  "<td width='15%'>" . $row['Full_Name'] . "</td>";
        echo  "<td width='10%'>" . $row['DOB'] . "</td>";
        echo  "<td width='10%'>" . $row['Sentence'] . "</td>";
        echo  "<td width='10%'>" . $row['datein'] . "</td>";
        echo  "<td width='10%'>" . $row['dateout'] . "</td>";
        echo  "<td width='10%'>" . $row['Address'] . "</td>";
        echo  "<td width='10%'>" . $row['County'] . "</td>";
        echo  "<td width='10%'>" . $row['Gender'] . "</td>";
        echo  "<td width='10%'>" . $row['Education'] . "</td>";
        echo  "<td width='10%'>" . $row['Marital'] . "</td>";
        echo  "<td width='10%'>" . $row['Offence'] . "</td>";
        echo  "<td width='10%'>" . $row['File_num'] . "</td>";
        echo  "<td width='10%'>" . $row['prison'] . "</td>";

        // echo '<td width="3%"><b><a href="deleteprisoners1.php?id=' . $row['id'] . '">Delete</a></font></b></td>';


        echo "</tr>";
    }
    echo "</table>";
    echo '<td width="3%" align="center"><b><a href="search-form.php">Home >>>></a></font></b></td>';
    echo "<br/>";
} else {
    echo "<font size='5'>" . "Does not exist" ." " . "Click" . "<a href='search-form.php'>" . "  " . "here"  . "</a>"  . "  " . "to verify  ID" . "</font>";
}
echo '</center>';
echo '</body>';
