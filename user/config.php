<?Php
//error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
$dbhost_name = "localhost";
$database = "prison_system"; // your database name
$username = "prison";          // Your database user id 
$password = "prison123.";          // Your password

//////// connecting to database /////////
try {
    $dbo = new PDO('mysqli:host=localhost;dbname=' . $database, $username, $password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
