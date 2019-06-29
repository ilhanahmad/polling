<?php
// hide errors
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "polling";

$cnct = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($cnct->connect_error) {
    die("Try Again Later!");
} 
?>