<?php

for ($i = 1; $i <= 20; $i++) {  
    /*if ($i == 11) {
        break;
    }

    if ($i == 7 || $i == 15) {
        continue;
    }*/

    if ($i == 7 || $i == 15) {
        die;
    }

    echo $i . "<br>";
}
//echo "Saliste de bucle";
echo "Esta lina no se ejecutara";

//break detiene la ejecución de un ciclo o switch
//continue salta a la siguiente iteración de un ciclo
//die detiene la ejecución del script mostrando un mensaje opcional