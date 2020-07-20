<?php
$largo=$_GET['largo'];
$ancho=$_GET['ancho'];

$triangulo= (($largo/2)*$ancho)/2;
$rectangulo= (($largo/2)*$ancho);

$total= $triangulo+$rectangulo;
echo "El área del terreno es de: ".$total." cm2";





?>