<?php
$data = [
    [
        "nombre" => "Adamaris Dianai",
        "email" => 'adamarisdianai@gmail.com',
        "celular" => "0987654321",
        "direccion" => [
            "pais" => "Perú",
            "ciudad" => "Lima"
        ]
    ],
    [
        "nombre" => "Kemberli Nereida",
        "email" => 'kemberlinereida@gmail.com',
        "celular" => "12387654321"
    ],
    [
        "nombre" => "Josue Eduardo",
        "email" => 'josueeduardo@gmail.com',
        "celular" => "6787654321"
    ]
];

//echo $data[1]['email'];
//echo $data[0]['direccion']['pais'];

foreach($data as $item){
    echo $item['nombre'] . "<br>";
    echo $item['email'] . "<br>";
    echo $item['celular'] . "<br>";
    echo "<br>";
}

?>