<?php
include "configs/config.php";
include "configs/funciones.php";

if(isset($p)){
    $p = "principal";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1b83b893b8.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>



    <title>Tienda Online</title>
</head>
<body>
    <div class="header">
        Tienda Online
    </div>
    <div class="menu">
        <a href="?p=principal">Principal</a>
        <a href="?p=productos">Productos</a>
        <a href="?p=ofertas">Ofertas</a>
        <a href="?p=carrito">Carrito</a>

        <a class="pull-right" href="?p=admin">Administrador</a>
    </div>
    <div class="cuerpo">
        <?php
            if(file_exists("modulos/".$p.".php")){
                include "modulos/".$p.".php";
            }else{
                echo"<i>No se ha encontrado el modulo <b>".$p."</b></i>";
                }
        ?>
    </div>
    <div class="footer">
        
    </div>

</body>
</html>