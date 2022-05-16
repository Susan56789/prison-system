<?php

//capture search term and remove spaces at its both ends if the is any
$searchTerm = trim($_GET["keyname"]);

//check whether the name parsed is empty
if ($searchTerm == "") {
	echo "Enter name  you are searching for.";
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
$query = "SELECT * FROM registration WHERE Full_Name LIKE '%$searchTerm%'";

$results = mysqli_query($link, $query);

/* check whethere there were matching records in the table
by counting the number of results returned */
if (mysqli_num_rows($results) >= 1) {
	$output = "";
	while ($row = mysqli_fetch_array($results)) {

		$output .= "<table>";

		$output .= "National ID: " . $row['id'] . "<br />";
		$output .= "Full Name: " . $row['Full_Name'] . "<br />";
		$output .= "Date of Birth: " . $row['DOB'] . "<br />";
		$output .= "Date In: " . $row['datein'] . "<br />";
		$output .= "Date Out: " . $row['dateout'] . "<br />";
		$output .= "Address: " . $row['Address'] . "<br />";
		$output .= "County: " . $row['County'] . "<br />";
		$output .= "Gender: " . $row['Gender'] . "<br />";
		$output .= "Education: " . $row['Education'] . "<br />";
		$output .= "Marital: " . $row['Marital'] . "<br />";
		$output .= "Offence: " . $row['Offence'] . "<br />";
		$output .= "File_num: " . $row['File_num'] . "<br />";
		$output .= "</table>";
	}
	echo $output;
} else
	echo "There was no matching record for the name " . $searchTerm;
