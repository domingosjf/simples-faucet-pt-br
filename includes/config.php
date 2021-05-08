<?php

// Database Configuration

$dbHost = "localhost";
$dbUser = "root";
$dbPW = "";
$dbName = "faucet";

// Establish connection

$mysqli = mysqli_connect($dbHost, $dbUser, $dbPW, $dbName);

// Check connection
if(mysqli_connect_errno()){
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Website

$Website_Url = "";

?>