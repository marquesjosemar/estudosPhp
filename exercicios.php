
<?php 
 
 $mensagem = '';

 if(isset( $_POST['nota'])) {
    $nota = htmlspecialchars($_POST['nota']);

    

    switch (true) {
        case $nota >= 7:
            $mensagem = "<h2> Olá, sua nota é: " . $nota . " e você está <strong>aprovado</strong></h2>";
            break;
        case ($nota >= 5 && $nota < 7):
            $mensagem = "<h2> Olá, sua nota é: " . $nota . " e você está <strong>Precisa estudar mais</strong></h2>";
            break;
        default:
                $mensagem = "<h2>Olá, sua nota é: $nota e você está <strong>reprovado</strong></h2>";
                break;
    }

    if(empty($nota)) {
        $mensagem = '<p> Por favor, digite uma nota </p>';
    } else {
     
    }
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
    

    <h2>Digite sua nota: </h2>
    <form action="exercicios.php" method="post">
        <input type="text" id="nota" name="nota">
        <button type="submit">Enviar</button>

    </form>

    <?php 
        if(!empty($mensagem)){
            echo $mensagem;
        } else{
        }

    ?>
    
</body>
</html>