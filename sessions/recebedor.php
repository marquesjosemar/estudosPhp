<?php 
session_start();

$nome = filter_input(INPUT_POST, 'nome',);

if($nome) {
    echo "NOME: " .$nome. "<br>";
} else {

    $_SESSION['aviso'] = "Tem que digitar algo";

    header("location: index.php");
    exit;
}

?>




