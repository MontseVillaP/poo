<?php
/*Definir clase*/
class grad{
    /*Declarar variables de clase*/
    
    public $grados;
    public $resultado;
    
    /*Definir el constructor*/
function __construct(){
    $this->grados=0;
    $this->resultado=0;

}
/*Crear los metodos necesarios para el funcionamiento*/
public function set_valores($grados){
    $this->grados=$grados;
}
public function get_valores(){
    $cadena = "El resultado de la conversión es: ".$this->resultado;
    return $cadena;
}

public function Celsius(){
    $this->resultado=($this->grados*1.8000)+32;
}
public function Farenheit(){
    $this->resultado=($this->grados-32)/1.8000;
}

}

?>