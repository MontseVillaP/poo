<?php
/*Definir clase*/
class formu{
    /*Declarar variables de clase*/
    
    public $usuario;
    public $correo;
    public $contraseña;
    
    /*Definir el constructor*/
function __construct(){
    $this->usuario='';
    $this->correo='';
    $this->contraseña='';

}
/*Crear los metodos necesarios para el funcionamiento*/
public function set_valores($usuario, $correo, $contraseña){
    $this->usuario=$usuario;
    $this->correo=$correo;
    $this->contraseña=$contraseña;
}
public function get_valores(){
    $cadena = "Nickname: ".$this->usuario."<br>Correo electrónico: ".$this->correo."<br>Contraseña: ".$this->contraseña;
    return $cadena;
}

}

?>