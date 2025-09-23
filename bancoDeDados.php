<?php
$pdo = new PDO("mysql:dbname-test;host=localhost", "root", "Mwm10401#");

$sql = $pdo->query("SELECT * FROM usuarios");
$usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($usuarios);