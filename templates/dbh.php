<?php
//database connection using PDO
$host='localhost';
$database='studentsdb';
$user='root';
$password='';

$dsn ="mysql:host=$host;dbname=$database";
//$db = new mysqli ('localhost', $firstname, $password,
//$database) or die ('Database FAILED to connect');

try{
    $databaseConnection = new PDO($dsn, $user, $password);
    $databaseConnection -> setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
   // echo 'Connection to the database has been succesfully';
}
    catch(PDOException $err){ 
        echo 'Database FAILED to connect'.$err->getMessage();

    }
        
  


?>