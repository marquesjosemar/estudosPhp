<?php 
    require "conexao.php";
    $info = [];
    $id = filter_input(INPUT_GET,'id');

    if($id) {

        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $info = $sql->fetch(PDO::FETCH_ASSOC);
        } else {
            header("Location: index.php");
            exit;
        }

    } else {
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
    <form action="editar_action.php" method="post">

        <!-- importante pra pegar o id do usuario e enviar pro arquivo editar_action.php -->
        <input type="hidden" name="id" value="<?=$info['id']?>" />

        Nome: <label for="Nome:"><input type="text" name="nome" value="<?=$info['nome']?>"><br></label>

        Email: <input type="email" name="email" value="<?=$info['email']?>" />
        <input type="submit" value="Salvar" /> <br>


    </form>
</body>
</html>