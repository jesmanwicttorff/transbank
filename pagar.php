<?php
//session_start();
// Guardamos el token en una variable de session; ya no hace falta, el token lo paso por POST[]
//$_SESSION['token_sw'] = $inicializa->token;
/**********************************************************/

use Freshwork\Transbank\CertificationBagFactory;
use Freshwork\Transbank\TransbankServiceFactory;
use Freshwork\Transbank\RedirectorHelper;

include "conexion.php";
include 'vendor/autoload.php';

$fecha = date('Y-m-d');

// Obtenemos los certificados y llaves para utilizar el ambiente de integración de Webpay Normal.
// Crear un certificado nuevo con datos que lleva en el paquete
$bag = CertificationBagFactory::integrationWebpayNormal();
// Creamos una instancia de service factory para indicar que tipo de ceritificado estoy trabajando.
$webpay = TransbankServiceFactory::normal($bag);

// Agregamos el monto que voy a cobrar , colocamos el monto y el id del carrito u orden de compra
 $webpay->addTransactionDetail(1000,prueba.rand(1,100000));


// Inicializo la transaccion
$inicializa = $webpay->initTransaction('http://localhost/transbank_webpay/responsive.php' , 'http://localhost/transbank_webpay/final.php');

// asociar la transacion con el token $inicializa->token

// es decir guardarlo en la base de datos o variable de session el token


$sql = "INSERT INTO payment (token_sw,fecha)
VALUES ('$inicializa->token', '$fecha');";
$query =  mysqli_query($conn,$sql);





echo RedirectorHelper::redirectHTML($inicializa->url,$inicializa->token);

?>