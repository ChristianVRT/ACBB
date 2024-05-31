<?php 
$dbserver = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "accb_db";
$connection = "";

try
{
    echo"connection done";
    $connection = mysqli_connect($dbserver, $dbuser, $dbpassword, $dbname);
}
catch (mysqli_sql_exception)
{

}

?>