<?php

if(isset($_POST['name'])){
   
    require_once ('./conexion.php');


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
    $foto = "user.jpg";
    $curriculum = "user.pfj";
    
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
    
                $sql = "INSERT INTO registro (`Ruc_Ced`, `Apellidos_r`, `Nombres_r`, `Edad_r`, `Email_r`, `Direccion_r`, `Telefono_r`, `Civil_r`, `Sexo_r`, `Nivel_r`, `Cargo_r`, `Sueldo_r`, `Ciudad_r`, `Foto_r`, `Curriculum_r`) VALUES ('$ruc', '$surname', '$name', '$edad', '$email', '$direccion', '$telefono', '$estado', '$sexo', '$nivel', '$cargo', '$sueldo', '$ciudad', '$foto', '$curriculum')";
                
                $reslut = mysqli_query ($db, $sql);
    
                if (!$reslut) {
                  
                  die(mysqli_error($db));
                } else {
    
                    $error =  "Usuraio Registrado";
                }
              
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
}