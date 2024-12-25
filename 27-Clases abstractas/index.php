<?php

abstract class ClassAbstracta
{
    abstract protected function getValor();
    abstract public function valorPrefijo($prefijo);

    public function imprimir(){
        echo $this->getValor();
    }
}

//$objeto = new ClassAbstracta;

class ClassConcreta extends ClassAbstracta
{
    protected function getValor(){
        return "Clase concreta";
    }

    public function valorPrefijo($prefijo, $separador = '.'){
        //Lógica del método
        return $prefijo . " Clase concreta";
    }
}

$clase1 = new ClassConcreta;
$clase1->imprimir();
echo $clase1->valorPrefijo('aaaa');

/*La diferencia principal es que las interfaces solo definen contratos 
(métodos sin implementación), mientras que las clases abstractas pueden 
incluir tanto métodos abstractos como métodos con implementación y atributos.*/