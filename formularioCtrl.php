<?php

extract($_POST);
/*Solicitar el archivo que incluye nuestra clase*/
require_once('formulario.php');
/*Crear un objeto*/
$obj_formu= new formu();
/*Invocar los métodos*/
/*Las variables*/
$obj_formu->set_valores($U, $C, $P);
$cadena= $obj_formu->get_valores();
include('formularioVista.php');
return $cadena;

?>