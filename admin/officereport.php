<?php

// Database Connection

$host = "localhost";
$uname = "prison";
$pass = "prison123.";
$database = "prison_system";

$connection = mysqli_connect($host, $uname, $pass);

echo mysqli_error($connection);

//or die("Database Connection Failed");
$selectdb = mysqli_select_db($connection, $database) or die("Database could not be selected");
$result = mysqli_select_db($connection, $database)
    or die("database cannot be selected <br>");


// Fetch Record from Database

$output            = "";
$table             = "officerdetails"; // Enter Your Table Name
$sql             = mysqli_query($connection, "SELECT * from $table");
$columns_total     = mysqli_num_fields($sql);



function mysqli_field_name($result, $field_offset)
{
    $properties = mysqli_fetch_field_direct($result, $field_offset);
    return is_object($properties) ? $properties->name : null;
}

// Get The Field Name

for ($i = 0; $i < $columns_total; $i++) {
    $heading    =    mysqli_field_name($sql, $i);
    $output        .= '"' . $heading . '",';
}
$output .= "\n";

// Get Records from the table

while ($row = mysqli_fetch_array($sql)) {
    for ($i = 0; $i < $columns_total; $i++) {
        $output .= '"' . $row["$i"] . '",';
    }
    $output .= "\n";
}

// Download the file

$filename =  "officer_report.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename=' . $filename);

echo $output;
exit;
