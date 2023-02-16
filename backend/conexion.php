<?php
$hostname = '66.228.61.234';
$username = 'despensa_root'; 
$password = '1nv1t4d0s$'; 
$database = 'despensa_mevita'; 
$port = 3306;

$db = mysqli_connect($hostname, $username, $password, $database, $port) or die ('No se pudo conectar con el serivodr '.mysqli_error);

if(isset($db)){
echo ' conectado';
}
