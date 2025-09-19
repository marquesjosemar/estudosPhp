<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Qual o seu nome?</h1>
<form action="usuario.php" method='POST'>
    
        <label>
            <input type="text" name="nome">
        </label>
        <button type="submit">Enviar</button>
</form>
</body>
</html>