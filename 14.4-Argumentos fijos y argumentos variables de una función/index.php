<?php

function valoracion($nombre, $rating){
    echo "El $nombre tiene un raiting de $rating";
}

//valoracion("Curso PHP 8 desde cero",5)

function concatenar(...$palabras){
    $resultado = "";
    foreach($palabras as $palabra){
        $resultado .= $palabra . " ";
    }
    echo $resultado;
}

concatenar('curso', 'php', '8', 'desde', 'cero');
?>