<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proiectewd";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

?>
