<?php

extract($_POST);
/*Solicitar el archivo que incluye nuestra clase*/
require_once('cantidades.php');
/*Crear un objeto*/
$obj_cantidad= new cantidad();
/*Invocar los métodos*/
/*Las variables $n, $e.$es, $g, $et*/
$obj_cantidad->set_valores($A, $B, $C);
$obj_cantidad-> total();
$cadena= $obj_cantidad->get_valores();

include('cantidadesVista.php');
return $cadena;

?>