<?php
require_once('clases/Persona.php');

$persona1 = new Persona("Adamaris Dianai","Marín Mendoza",22);

/*$persona1->setNombre("Adamaris Dianai");
$persona1 -> apellido= "Marín Mendoza";
$persona1 -> edad = 22;*/

//var_dump($persona1);

$persona1->setNombre("Adamaris");

$persona2 = new Persona("Kemberli Nereida","Marín Mendoza",13);

/*$persona2 ->setnombre("Kemberli Nereida");
$persona2 -> apellido= "Marín Mendoza";
$persona2 -> edad = 13;*/

echo "El nombre de la persona 1 es: " . $persona1->getNombre();
echo "<br>";
echo "El nombre de la persona 2 es: " . $persona2->getNombre();

?>