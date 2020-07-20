<?php

extract($_POST);
$matricula= $_POST['matricula'];
$semestre= $_POST['semestre'];
$promedio= $_POST['promedio'];

if($semestre >=6 and $promedio >=8.8 ){
    echo "<br>¡FELICIDADES HAZ SIDO ACEPTADO! <br> Tu matricula es: ".$matricula."<br> Tu carrera es: Economía";
}
if($semestre >6 and $promedio >8.5 ){
    echo "<br><br>¡FELICIDADES HAZ SIDO ACEPTADO! <br> Tu matricula es: ".$matricula."<br> Tu carrera es: Computación";
}
if($semestre >5 and $promedio >8.5 ){
    echo "<br><br>¡FELICIDADES HAZ SIDO ACEPTADO! <br> Tu matricula es: ".$matricula."<br> Tu carrera es: Administración";
}
if($semestre >5 and $promedio >8.5 ){
    echo "<br><br>¡FELICIDADES HAZ SIDO ACEPTADO! <br> Tu matricula es: ".$matricula."<br> Tu carrera es: Contabilidad";
}
else{
    echo "NO haz sido aceptado porque tu promedio es: ".$promedio;
}
return;

?>