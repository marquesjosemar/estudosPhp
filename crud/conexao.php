<?php 

$pdo = new PDO("mysql:dbname=test;host=localhost", "root", "Mwm10401#");


//aqui faz parte do CRUD, Read. 
$sql = $pdo->query("SELECT * FROM usuarios");
$usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);