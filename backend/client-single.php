<?php

if($_POST['id']){

    require_once './conexion.php';

    $id=htmlspecialchars($_POST['id']);
	$id=mysqli_real_escape_string($db,$id);

    $sql = "SELECT  Identifacion,  concat_ws(' ',Nombres, Apellidos) as 'Nombres' from tb_cliente   where  Estado = 1 and Id = '".$id."' ;"; 

    $result = mysqli_query($db,$sql);
    $json = array();

        while ($row = mysqli_fetch_array($result)) {

            $json[]= array(

                'nombres' => $row['Nombres'],
                'Identifacion' => $row['Identifacion']
            );

        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
mysqli_close($db);


}