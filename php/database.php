<?php 
$dbserver = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "accb_db";
$connection = "";

try {
    $connection = mysqli_connect($dbserver, $dbuser, $dbpassword, $dbname);
    if (!$connection) {
        throw new Exception("Erro na conexão com o banco de dados.");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>