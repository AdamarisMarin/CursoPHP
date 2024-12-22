<?php

$resultado = 1;

echo "Marca de tiempo:" . time() . "<br>";
echo "Raiz cuadrada de 9:" . sqrt(9) . "<br>";
echo "Numero aleatorio entre 90 y 100: " . rand(90, 100) . "<br>";
echo "Numero pi: " . pi() . "<br>";



function factorial($n){
    $resultados = 1;
    for ($i=1; $i <= $n ; $i++) { 
        $resultados = $resultados * $i;
    }
    return $resultados;
    /*echo "El factorial de $n es: $resultados";*/
}

$resultados = factorial(6);

echo "El factorial de 6 es: $resultados";