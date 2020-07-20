<?php
/*Definir clase*/
class cantidad{
    /*Declarar variables de clase*/
    
    public $Col;
    public $Trans;
    public $Ali;
    public $resultado;
    
    /*Definir el constructor*/
    function __construct(){
    $this->Col=0;
    $this->Trans=0;
    $this->Ali=0;
    $this->resultado=0;
}
/*Crear los metodos necesarios para el funcionamiento*/
public function set_valores($Ali, $Col, $Trans){
    $this->Ali=$Ali;
    $this->Col=$Col;
    $this->Trans=$Trans;
}
public function get_valores(){
    $cadena = "Su total de gastos es: $".$this->resultado=($this->Ali+$this->Col+$this->Trans)."<br> Tu cantidad de alimentación es: $".$this->resultado=$this->Ali."<br> Tu cantidad de transporte es: $".$this->resultado=$this->Trans."<br> Tu colegiatura es: $".$this->resultado=$this->Col;
    return $cadena;
}
public function total(){
    
    if($this->Col >=5000 and $this->Ali >=3000){
        $this->resultado= "Tu total de gastos es: $".$this->resultado=($this->Ali*1.25)+($this->Col*(15/100))+($this->Trans)."<br> Tu cantidad de alimentación más el 25% es: $".$this->resultado=$this->Ali*1.25."<br> Tu cantidad de transporte es: $".$this->resultado=$this->Trans."<br> Tu colegiatura menos el 15% es: $".$this->resultado=($this->Col*(15/100));
    }
    if($this->Col >=5000 and $this->Ali <3000){
        $this->resultado= "Tu total de gastos es: $".$this->resultado=($this->Ali)+($this->Col*(15/100))+($this->Trans)."<br> Tu cantidad de alimentación es: $".$this->resultado=$this->Ali."<br> Tu cantidad de transporte es: $".$this->resultado=$this->Trans."<br> Tu colegiatura menos el 15% es: $".$this->resultado=($this->Col*(15/100));
    }
    if($this->Col <5000 and $this->Ali>=3000){
        $this->resultado= "Tu total de gastos es: $".$this->resultado=($this->Ali*1.25)+($this->Col)+($this->Trans)."<br> Tu cantidad de alimentación más el 25% es: $".$this->resultado=$this->Ali*1.25."<br> Tu cantidad de transporte es: $".$this->resultado=$this->Trans."<br> Tu colegiatura es: $".$this->resultado=($this->Col);
    }
    else{
        function get_valores(){
            
        }
    }
    return;
}
 
}



?>