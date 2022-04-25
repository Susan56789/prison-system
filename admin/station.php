<?php

// Database Connection

$host="localhost";
$uname="root";
$pass="";
$database = "prison_system";	

$connection=mysqli_connect($host,$uname,$pass, $database); 

//echo mysqli_error();

	
// Fetch Record from Database

$output			= "";
$table 			= "policestation_tbl"; // Enter Your Table Name
$sql 			= mysqli_query($connection,"select * from $table");
$columns_total 	= mysqli_num_fields($sql);

// Get The Field Name

for ($i = 0; $i < $columns_total; $i++) {
	$heading	=	mysqli_field_name($sql, $i);
	$output		.= '"'.$heading.'",';
}
$output .="\n";

// Get Records from the table

while ($row = mysqli_fetch_array($sql)) {
for ($i = 0; $i < $columns_total; $i++) {
$output .='"'.$row["$i"].'",';
}
$output .="\n";
}

// Download the file

$filename =  "policestation.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

echo $output;
exit;
	
?>


   