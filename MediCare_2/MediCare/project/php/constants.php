<?php
//start session
session_start();

//create constants to store the Non Repeating Values
define('SITEURL', 'http://localhost/MediCare_2/MediCare/project/');
define('LOCALHOST','localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'medicare');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die("Could not connect to database");
$db_select = mysqli_select_db($conn, DB_NAME) or die("no database");
?>