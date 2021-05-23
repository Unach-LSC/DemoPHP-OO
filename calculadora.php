<?php
class Calculadora{
public $resultado=0;
public $valor1;
public $valor2;
public function sumar($numero1,$numero2){
    $resultado=$numero1+$numero2;
    return $resultado;
}
public function restar(){
    $numero1=$this->valor1;
    $numero2=$this->valor2;
    return $numero1-$numero2;
}
public function multiplicar(){
    return $this->valor1*$this->valor2;
}
public function dividir(){
    return $this->valor1/$this->valor2;
}
}
?>