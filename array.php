<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>


<?php 

$array = ["carro", "moto", "avião"];

foreach ($array as $valor) {
    echo $valor . PHP_EOL;
}   
echo "<br>";
echo "------------------" . "<br>";

$array2 = [
    "carro" => "BMW",
    "moto" => "Honda",
    "avião" => "GOL"
];
foreach ($array2 as $chave => $valor) {
    echo "O veículo $chave é um " . $valor . "<br>";
}
?>