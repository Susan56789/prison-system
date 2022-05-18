<?php
$con = mysqli_connect("localhost", "prison", "prison123.", "prison_system");


// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$FullNames = $_POST['Fnames'];
$Id = $_POST['id'];
$Email = $_POST['email'];
$Tel = $_POST['tel'];
$Filenum = $_POST['Filenum'];
$Nid = $_POST['Nid'];


//insert into court table
$link = "INSERT INTO witness (NationalId, FullNames, Email, Telephone, File_num,PrisonerId) 
VALUES ('$Id', '$FullNames', '$Email', '$Tel', '$Filenum','$Nid');";

if (!mysqli_query($con, $link)) {
    die('Error: ' . mysqli_error($con));
} else {
    echo "Could not complete.";
}

?>
<script type="text/javascript">
    alert("you have succefully add the record !thank you");
    window.location = "witness.php";
</script>