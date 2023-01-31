<?php

require_once './conexion.php';


$id = $_POST['id'];
$ruc = $_POST['ruc'];    
$name = $_POST['name'];
$surname = $_POST['surname'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$estado = $_POST['estado']; 
$sexo = $_POST['sexo'];
$nivel = $_POST['nivel'];   
$cargo = $_POST['cargo']; 
$sueldo = $_POST['sueldo'];
$ciudad = $_POST['ciudad'];



if(empty($ruc) || empty($name) || empty($surname) || empty($edad)
|| empty($email)    || empty($direccion )  || empty($telefono) || empty($estado) || empty($sexo)
|| empty($nivel)    || empty($cargo) || empty($sueldo) || empty($ciudad) || empty($foto) || empty($curriculum)) {
    
   $error = 'TODOS LOS DATOS SON OBLIGATORIOS';

}

else if(is_numeric($telefono) &&  is_numeric($edad) && is_numeric($ruc)){
 
    if($edad >=18 && $edad <65){
        if(strlen($telefono)== 10){

           /* $temp = $_FILES['foto']['tmp_name'];
            move_uploaded_file($temp, '../User/'. $foto);

            $temp_c = $_FILES['curriculum']['tmp_name'];
            move_uploaded_file($temp_c, '../User_C/'. $curriculum);
            */

            $sql = "UPDATE registro SET Ruc_Ced = '$ruc', Apellidos_r = '$surname', Nombres_r = '$name', Edad_r = '$edad', Email_r = '$email', Direccion_r = '$direccion', Telefono_r = '$telefono', Civil_r = '$estado', Sexo_r = '$sexo', Nivel_r = '$nivel', cargo_r = '$cargo ', Sueldo_r = '$sueldo', Ciudad_r = '$ciudad' WHERE (Ruc_Ced = '$id');";

            $result = mysqli_query($db , $sql);
            
            if(!$result){
               echo $sql;
            }
            
            $error = "USUARIO ACTUALIZADO";
          
         } 
         else{
          $error = " EL NUMERO DE TELEFONO TIENE QUE SER DE 10 CARACTERES";
         }
    } else {
        $error = "Edad no valida";
    }


}
else {
    $error = "REVISE LOS CAMPOS, QUE SE LE PIDE EN NUMEROS";
}
echo $error;


