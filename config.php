<?php
define('SERVERNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'db_store');

$link = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>