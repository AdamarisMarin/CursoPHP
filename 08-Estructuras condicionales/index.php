<?php

$a = 5;
$b = 3;

echo "Primer parrafo <br>";

if ($a < $b) {
    echo "Segundo parrafo <br>";
}else{
    echo "Segundo parrafo editado <br>";
}
echo "Tercer parrafo <br>";

if ($a > $b) {
    echo"El valor de a es mayor que el valor de b <br>";
}elseif($a < $b){
    echo "El valor de a es menor que el valor de b <br>";
}else{
    echo "El valor de a es igual que el valor de b <br>";
}