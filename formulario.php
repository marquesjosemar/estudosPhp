
<?php
//só executa se o formulario foi enviado
$mensagem = '';

if(isset($_POST['nome_usuario'])) {
    // Basic security: sanitize input to prevent XSS attacks
    $nome = htmlspecialchars($_POST['nome_usuario']);

    if(empty($nome)) {
        $mensagem = "<p>Por favor, preencha seu nome!</p>";
    } else {
    $mensagem = "<h2> Olá! " . $nome . "!</h2>" ;
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contato</title>
</head>
<body>
    

    <?php 
        if (!empty($mensagem)) {
            echo $mensagem;
        }
    ?>
<h2>Digite seu nome</h2>

<form action="formulario.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome_usuario">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>