<?php

require "vendor/autoload.php";

use GuzzleHttp\Client;

// Criar cliente HTTP
$cliente = new Client();

// Fazer uma requisição GET
$resposta = $cliente->request("GET", "https://jsonplaceholder.typicode.com/posts/1");

// Mostrar resultado
echo "Status: " . $resposta->getStatusCode() . "<br>";
echo "Corpo: " . $resposta->getBody();