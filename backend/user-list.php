<?php


require_once ('./conexion.php');

$sql = "SELECT r.Ruc_Ced as 'id' ,concat_ws(' ',r.Apellidos_r, r.Nombres_r) as 'Nombres', r.cargo_r as 'cargo' FROM registro as r;";
$result = mysqli_query($db, $sql);

if(!$result){
    die ('Query Failed').mysqli_error($db);
}

$json = array();
while ($row = mysqli_fetch_array($result)) {
    $json[]= array(
        'id' => $row['id'],
        'name' => $row['Nombres'],
        'cargo' => $row['cargo']

    );
}

$jsonstring = json_encode($json);

echo $jsonstring;