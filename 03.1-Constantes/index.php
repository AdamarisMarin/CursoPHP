<?php
 define('CURSO', 'PHP 8 desde cero');
 define('USUARIO_1', 'Adamaris');
 
 define('ANIMALES',[
    'perro',
    'gato',
    'loro',
    'tortuga',
 ]);

echo CURSO;
echo "<br>";
echo USUARIO_1;
echo "<br>";
echo ANIMALES[3];
echo "<br>";

if(defined('CURSO')){
    echo "Si se ha definido";
}

echo "Mi version de PHP es: ", PHP_VERSION;
echo "<br>";
echo "Mi sistema operstivo es: ", PHP_OS;
echo "<br>";
echo PHP_EXTENSION_DIR;
echo "<br>";
echo PHP_SAPI;
echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__;
?>