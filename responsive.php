<?php

use Freshwork\Transbank\CertificationBagFactory;
use Freshwork\Transbank\TransbankServiceFactory;
use Freshwork\Transbank\RedirectorHelper;

include 'vendor/autoload.php';
include "conexion.php";
// Crear un certificado nuevo con datos que lleva en el paquete
$bag = CertificationBagFactory::integrationWebpayNormal();
// Creamos una instancia de service factory para indicar que tipo de ceritificado estoy trabajando.
$webpay = TransbankServiceFactory::normal($bag);

//print_r($_POST);

$token_sw= $_POST["token_ws"]; // obtengo el token por POST
// Obtenemos la transaccion



$result = $webpay->getTransactionResult();



$monto = $result->detailOutput->amount; // monto

$fecha = date('Y-m-d');

$estado = $result->detailOutput->responseCode; // estado de tranferencia

$orden_compra = $result->detailOutput->buyOrder; // numero orden de compra
$autorizacion  = $result->detailOutput->authorizationCode; // autorizacion de codigo
$commerceCode = $result->detailOutput->commerceCode; // Codigo de comercio
$tipo_tarjeta = $result->detailOutput->paymentTypeCode; // tipo de tarjeta


$sql = "UPDATE payment set monto ='$monto' , fecha = '$fecha' , authorization_codigo  = '$autorizacion' ,
response_code = '$estado' , orden_compra = '$orden_compra' , commerceCode = '$commerceCode' , tipo_tarjeta = '$tipo_tarjeta' where token_sw = '$token_sw'; ";



$query =  mysqli_query($conn,$sql);


//print_r($_POST);

// responseCode me identifica si es 0 la transaccion es aceptada

// responseCode me identifica si es diferente de  0 la transaccion es rechazada

if ($estado == 0) {

   // echo "La transaccion fue aprobada";
  // guardamos en la base datos

} else {

    //echo "La transacion fue rechazada";

    // marcar en la base de datos de que la transacion fue rechazado
}

// la transcaccion hizo el recorrido completo

$webpay->acknowledgeTransaction();



//Redirecciona al cliente

echo RedirectorHelper::redirectBackNormal($result->urlRedirection);
?>