<?php

if(isset($_POST['ruc']) && $_POST['name'] ){
    require_once './conexion.php';

    $ruc=htmlspecialchars($_POST['ruc']);
	$ruc=mysqli_real_escape_string($db,$ruc);

    $name=htmlspecialchars($_POST['name']);
	$name=mysqli_real_escape_string($db,$name);
      
    $surname=htmlspecialchars($_POST['surname']);
	$surname=mysqli_real_escape_string($db,$surname);

    $email=htmlspecialchars($_POST['email']);
	$email=mysqli_real_escape_string($db,$email);
    
    $direccion=htmlspecialchars($_POST['direccion']);
	$direccion=mysqli_real_escape_string($db,$direccion);

    $telefono=htmlspecialchars($_POST['telefono']);
	$telefono=mysqli_real_escape_string($db,$telefono);
    
    $sql1 =  "SELECT  * from tb_cliente where Identifacion = '".$ruc."'";
    $result1 = mysqli_query($db,$sql1);

   if(mysqli_num_rows($result1) >= 1){

        echo 'Ya existe el cliente ';

   }else{
        $sql = "INSERT INTO tb_cliente (`Apellidos`, `Nombres`, `Identifacion`, `Celular`, `Email`) VALUES  ('".$surname."', '".$name."', '".$ruc."', '".$telefono."', '".$email."');";

        mysqli_prepare($db,$sql);

            $result = mysqli_query($db,$sql);
        
            if( mysqli_affected_rows($db) >= 1){
                echo 'Cliente guardado con exito';
            }else {
                echo 'Ocurrio un error al momento de guardar el cliente ';
        }
    }    

    mysqli_close($db);
}   