<?php
$numero = 7;

for($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
}

echo "<br> Exercício 3: ";

$produto = "notebook";
$preco = 2500.50;
$disponivel = true;

echo "O produto $produto custa R$", number_format($preco, 2, ',', '.');
echo "<br>";

if ($disponivel) {
    echo "Produto em estoque";
} else {
    echo "Produto indisponível";
}

?>