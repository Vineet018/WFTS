<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wfts1";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
