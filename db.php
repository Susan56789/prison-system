
<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'prison';
$db_pass		= 'prison123.';
$db_database	= 'prison_system';

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>