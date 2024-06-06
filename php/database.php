<?php 
$dbserver = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "accb_db";
$connection = "";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connection = mysqli_connect($dbserver, $dbuser, $dbpassword, $dbname);
    
    if (!$connection) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>