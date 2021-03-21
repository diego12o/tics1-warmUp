<?php
include_once "conexion.php";

$conexion = conect();


//recepcion de los datos enviados mediante POST desde javascript.js

$nombreProducto = (isset($_POST["nombreProducto"])) ? $_POST["nombreProducto"] : "";
$tienda = (isset($_POST["tienda"])) ? $_POST["tienda"] : "";
$cuotas = (isset($_POST["cuotas"])) ? $_POST["cuotas"] : "";
$valorCuotaMensual = (isset($_POST["valorCuotaMensual"])) ? $_POST["valorCuotaMensual"] : "";
$PrecioAlContado = (isset($_POST["PrecioAlContado"])) ? $_POST["PrecioAlContado"] : "";
$opcion = (isset($_POST["opcion"])) ? $_POST["opcion"] : "";

//FALTAN CALCULOS PARA AGREGAR A LA BD: CAE y costoTotal con sus correctos valores.

$costoTotal = 1; 
$CAE =1;


switch($opcion){

      case 1: //calcular

            break;
      case 2: //insertar
            $query = "INSERT INTO tabla_datos (nombreProducto, tienda,  cuotas, valorCuotaMensual, 
                                                PrecioAlContado, costoTotal, CAE) 
                        VALUES ('$nombreProducto', '$tienda', '$cuotas','$valorCuotaMensual',
                              '$PrecioAlContado','$costoTotal','$CAE')";
            $resultado = mysqli_query($conexion,$query);
            break;

      case 3://eliminar
            $id = (isset($_POST["id"])) ? $_POST["id"] : "";
            $query = "DELETE FROM tabla_datos WHERE id='$id'";
            $resultado = mysqli_query($conexion,$query);
            break;
}

print json_encode(JSON_UNESCAPED_UNICODE); //devuelve nada al javascript, para actualizar la pagina al tener una respuesta
                                          //creo que con esta opcion se pueden enviar datos al javascript, pero no se como aun
$conexion = NULL;


?>