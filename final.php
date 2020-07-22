<?php

// Obtener la transaccion que tengan el token post['token_ws'] asociado
session_start();
include "conexion.php";
//print_r($_POST);
//print_r($_SESSION);

$token_sw= $_POST["token_ws"]; // obtengo el token por POST

$sql = "SELECT response_Code  FROM payment  where token_sw = '$token_sw'; ";

$query =  mysqli_query($conn,$sql);

$row = $query->fetch_array();

$estado = $row['response_Code'];



if($estado == '0' ) {?>

    <a href="index.php"><p align="center">Gracias por su compra</p></a>
    <br>
    <br>
    <footer ><p align="center">Creado por Jesman Arteaga</p></footer>

 <?php return; } ?>

<a href="index.php"><p align="center">Su compra fue rechazado</p></a>
<br>
<br>

<footer ><p align="center">Creado por Jesman Arteaga</p></footer>