<?php
//database connection using PDO
$host = 'localhost';
$database = 'studentsdb';
$firstname = 'root';
$password = '';

$dsn ="mysql : host= $host;dbnname= $database ";

try{
    $databaseConnection = new PDO($dsn, $username, $password);
    $databaseConnection -> setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    echo 'Connection to the database has been succesfully';
}
    catch(PDOException $err){ 
        echo 'Database FAILED to connect'.$err->getMessage();

    }
        



?>