<?php

    require "conexao.php";

    //pegar dados do formulario
    $id = filter_input(INPUT_GET, 'id');
   

    if($id) {
         //verificar se existe
        $sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
        $sql->bindValue(':id', $id, PDO::PARAM_INT);    
        $sql->execute();
    } 
        
    header("Location: index.php");
    exit;
    