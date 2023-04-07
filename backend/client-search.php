<?php

if(isset($_POST['search'])){
    require_once './conexion.php';

    
    $search=htmlspecialchars($_POST['search']);
	$search=mysqli_real_escape_string($db,$search);

    $sql = "SELECT  Identifacion, Id, concat_ws(' ',Nombres, Apellidos) as 'Nombres' from tb_cliente   where Identifacion like '".$search."%' and Estado = 1;"; 

    $result = mysqli_query($db,$sql);
    $json = array();

    if(mysqli_num_rows($result) <=0){
        echo 'Cliente no registrado';
    }else{
       
        while ($row = mysqli_fetch_array($result)) {

            $json[]= array(
                'id' => $row['Id'],
                'nombres' => $row['Nombres'],
                'Identifacion' => $row['Identifacion']
            );

        }
        $jsonstring = json_encode($json);
        echo $jsonstring;

    }

    mysqli_close($db);
}