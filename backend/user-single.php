<?php
require_once './conexion.php';

$id = $_POST['id'];
$sql = "SELECT * FROM itsjba.registro where Ruc_Ced= '".$id."';";
$result = mysqli_query($db,$sql);

if(!$result){
    die(mysqli_error);
}

$json = array();
while ($row = mysqli_fetch_array($result)){
    $json= array(
        'id' => $row['Ruc_Ced'],
        'surname' =>$row['Apellidos_r'],
        'name' => $row['Nombres_r'],
        'edad' => $row['Edad_r'],
        'email' => $row['Email_r'],
        'dir' => $row['Direccion_r'],
        'cell' => $row['Telefono_r'],
        'civil' => $row['Civil_r'],
        'sex' => $row['Sexo_r'],
        'nivel' => $row['Nivel_r'],
        'cargo' => $row['Cargo_r'],
        'sueldo' =>$row['Sueldo_r'],
        'ciudad'=> $row['Ciudad_r'],
        'foto' => $row['Foto_r'],
        'crm'=> $row['Curriculum_r']
    );
}

$jsonstring = json_encode($json);
echo $jsonstring;

