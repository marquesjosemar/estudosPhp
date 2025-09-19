<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome');
$sair = filter_input(INPUT_POST, 'sair');

if($sair) {
    header("Location: index.php");
    exit;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá, <?= $nome ?> !</h1>

    <form action="index.php" method='post'>
        <button type="submit">Sair</button>
    </form>
</body>
</html>