<?php

$cadena = "Hola Mundo, como estas?";

// echo str_ends_with($cadena, 'Hola') ? 'Si se encuentra' : 'No se encuentra';

$cadena1 = "Prueba";
$cadena2 = "Prueba";
$cadena3 = "Hola Mundo";

if(strcasecmp($cadena1, $cadena2) == 0){
    echo "Las 2 cadenas son iguales <br>";
}
else{
    echo "Las 2 cadenas son diferentes <br>";
}

//echo ucfirst($cadena3);

//echo str_replace("Mundo", "world", $cadena);

//echo strtolower($cadena);

//echo strtoupper($cadena);

echo ucwords($cadena);
