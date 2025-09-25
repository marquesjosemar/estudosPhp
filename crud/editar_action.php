<?php

    require "conexao.php";

    //pegar dados do formulario
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if($id && $nome && $email) {
         //verificar se existe email
        $sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
        $sql->bindValue(':nome', $nome, PDO::PARAM_STR);
        $sql->bindValue(':email', $email, PDO::PARAM_STR);
        $sql->bindValue(':id', $id, PDO::PARAM_INT);    
        $sql->execute();

        header("Location: index.php");
        exit;  

    } else {
        header("Location: editar.php?id=" . urlencode($id));
        exit;
    }