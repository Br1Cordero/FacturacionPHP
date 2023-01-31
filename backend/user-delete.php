<?php

require_once ('./conexion.php');

if(isset($_POST)){
$id = $_POST['id'];


$sql = "DELETE from registro where Ruc_Ced = $id";
$result = mysqli_query($db, $sql);

if(!$result){

    die('Query Failed');
}

echo "Usuario eliminado";

}

