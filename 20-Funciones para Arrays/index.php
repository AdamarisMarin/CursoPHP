<?php
/*$array = [1,2,3];

$a = $array[0];
$b = $array[1];
$c = $array[1];

list($a,$b,$c) = $array;
echo $b;*/

//range() genera un array con una secuencia de valores dentro de un rango especificado. Puedes definir el valor inicial, el valor final
//$array = range(10,20);
/*Esto crea un array con los valores:
[10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]*/

//var_dump($array);

//echo $array[5];
//El índice 5 corresponde al sexto elemento del array

//count() cuenta la cantidad de elementos dentro del array
//echo count($array);

$array = ['Adamaris', 'Victor', 'Pamela', 'Iris'];

//Elimina un elemento del array
unset($array[2]);

if(in_array('Iris', $array)){
    echo "El valor buscado se encuentra dentro del array";
} else{
    echo "El valor buscado no se encuentra dentro del array";
}

?>