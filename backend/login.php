<?php

if (isset($_POST ['user']) && $_POST['pass']){

    require_once './conexion.php';

    $usuario=htmlspecialchars($_POST['user']);
	$user=mysqli_real_escape_string($db,$usuario);

    $password=htmlspecialchars($_POST['pass']);
	$pass=mysqli_real_escape_string($db,$password);

   $sql = "SELECT U.Id, Perfil FROM tb_usuario, tb_perfil as U where User  =  '". $user ."' and Password = '". $pass."' and  Estado = 1";
   mysqli_prepare($db,$sql);

   $result  = mysqli_query($db,$sql );
   
   $json=array();
   if(mysqli_num_rows($result) ==0 ){
        echo 'Credenciales incorrectas ';
    }else {
        while ($row = mysqli_fetch_array($result)) {
            $json[]= array(
                'id' => $row['Id'],
                'perfil' => $row['Perfil']

            );
            $_SESSION ['Id'] = $row['Id'];
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
    
    
}