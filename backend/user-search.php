<?php

if(isset($_POST['search'])){

    require_once './conexion.php';
    
    
     
    $sql = "SELECT ruc, name, correo FROM tb_cliente  where Identifacion like '".$search."%';"; 
    $result = mysqli_query ($db, $sql);

    if(!$result){
        die(mysqli_error($db));
    }

    $json = array();

    if (mysql_affected_rows($result) >= 1){
        while ($row = mysqli_fetch_array($result)) {
            $json [] = array(
                'id' => $row['id'],
                'nombres'=> $row['name'],
                'correo' => $row['correo']
            );
        }

    }else {
        echo "No existen rgistros"   ;
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;

}
