<?php
$dbhost = "localhost";
$dbuser = "sagar";
$dbpass = "S@gar135";
$dbname = "INSURANCE";
$link=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if ($link->connect_error) {

die("Database Connection failed: " . $link->connect_error);

}



?>