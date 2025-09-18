<?php
session_start();


if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
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
    <form action="recebedor.php" method="post">

        <label >
            Nome:
            <br>
            <input type="text" name="nome">
        </label>

        <input type="submit" value="eNVIAR"> 


    </form>
</body>
</html>