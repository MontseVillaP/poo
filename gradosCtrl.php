<?php

extract($_POST);
/*Solicitar el archivo que incluye nuestra clase*/
require_once('grados.php');
/*Crear un objeto*/
$obj_grad= new grad();
/*Invocar los métodos*/
/*Las variables*/
$obj_grad->set_valores($grados);

switch($grade){
    case 'C' : $obj_grad->Celsius();
        $cadena=$obj_grad->get_valores();
        break;
    case 'F' : $obj_grad->Farenheit();
        $cadena=$obj_grad->get_valores();
        break;
}


include('gradosVista.php');
return $cadena;

?>