<?php
$hostname = 'localhost'; 
$username = 'root'; 
$password = '27866'; 
$database = 'sisfac'; 
$port = 3306;

$db = mysqli_connect($hostname, $username, $password, $database, $port) or die ('No se pudo conectar con el serivodr '.mysqli_error);

if(isset($db)){
    session_start();        
}
