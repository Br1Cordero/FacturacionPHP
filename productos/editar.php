<?php

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/agg-producto.css">
    <link rel="stylesheet" href="../Style/menu.css">
    <script src="../Js/includes.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="page">
        <div  data-include="./header.html"></div>
        <section class="container__form">
            
            <form action="#" method="post">
                <section class="form__container">
                    <label for="">Ingrese el Nombre del producto</label>
                    <input type="text" name="" id="">
                </section>

                <section class="form__container">
                    <label for="">Ingrese la Descripcion del producto </label>
                    <input type="text" name="" id="">
                </section>
                
                <section class="form__container">
                    <label for="">Escoja la Imagen del producto  </label>
                    <input type="file" name="" id="">
                </section>

                <section class="form__container">
                    <label for="">Ingrese el Stock del producto</label>
                    <input type="text" name="" id="">
                </section>

                <section class="form__container">
                    <label for="">Ingrese el Precio Unitario</label>
                    <input type="text" name="" id="">
                </section>

                <section class="form__container">
                    <label for="">Ingrese el Precio Mayorista</label>
                    <input type="text" name="" id="">
                </section>

                
                <section class="form__container">
                    <label for="">Ingrese el Precio De canillita </label>
                    <input type="text" name="" id="">
                </section>

                
                <section class="form__container">
                    <label for="">Ingrese el Precio otro</label>
                    <input type="text" name="" id="">
                </section>
                
                
                <section class="form__container">
                    <input type="submit" value="Enviar">
                </section>
            </form>
        </section>
    </div>
</body>
</html>