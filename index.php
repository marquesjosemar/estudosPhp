<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html><?php 
$idade = 20;

if ($idade < 20) {
    echo "menor que 20 - Acesso negado";
} else {
    echo "maior ou igual a 20 - Acesso autorizado";
}



echo "<br> exercício 2 - escreva um script que use um laço for para contar de 0 a 100, mas incrementando de 5 em 5. <br>"; 
//saída esperada: 0, 5, 10, 15, ..., 100

for ($i = 0; $i <= 100; $i += 5) {
    echo $i . " ";
}
echo "<br>";
echo "<br> <strong>Exercício 3:</strong> <br>";
echo "Crie um script que peça ao usuário um número inicial e um número final. Utilizando um laço while, exiba todos os números ímpares nesse intervalo. Dica: Para verificar se um número é ímpar, você pode usar o operador de módulo (%). Se a variavel numero % 2 != 0, o número é ímpar.<br>";

// $numero_inicial = readline("Digite o número inicial: ");
// $numero_final = readline("Digite o número final: ");

// while($numero_inicial <= $numero_final) {
//     if ($numero_inicial % 2 != 0) {
//         echo "numero primo:" . $numero_inicial . " " . "<br>";
//     }
//     $numero_inicial++;
// }


echo "<br>";
echo "<br> <strong>Exercício 4:</strong> <br>";
echo "Crie uma tabela de conversão de Celsius para Fahrenheit. O script deve exibir os valores de 0 a 20 graus Celsius e sua conversão correspondente em Fahrenheit.
Fórmula: F = (C * 9/5) + 32<br>";

$c = 0;
$f = 0;
while ($c <= 20) {
    $f = ($c * 9/5) + 32;
    echo "Celsius: " . $c . " - Fahrenheit: " . $f . "<br>";
    $c++;
}


echo"<br>";
echo "Crie um script que simule uma validação de entrada. Use um laço while para 'pedir' uma senha até que a senha correta ('1234') seja fornecida.
A cada tentativa incorreta, exiba a mensagem 'Senha incorreta. Tente novamente.'. Quando a senha correta for fornecida, exiba 'Acesso concedido.' e interrompa o laço.

Dica: Você pode usar o comando break; para sair de um laço a qualquer momento.";
echo"<br>";

// $senha_secreta = '1234';
// $tentativa = '';

// while($tentativa != $senha_secreta) {
//     $tentativa = readline("digite a senha: ");

//     if($tentativa == $senha_secreta) {
//         echo "Acesso concedido.";
//         break;
//     } else {
//         echo "Senha incorreta. Tente novamente." . "<br>";
//     }
// }

echo"<br>";
echo "Escreva um script que calcule o fatorial de um número (ex: 10) usando um laço for. Dica: Comece o laço de forma decrescente (de n até 1) e vá multiplicando os valores em uma variável acumuladora.";

$num = 5;
$fatorial = 1;

for ($i = $num; $i >= 1; $i--) {
    $fatorial *= $i;
}
echo "O fatorial de " . $num . " é: " . $fatorial;


echo "<br>";
echo "Use laços aninhados para desenhar um quadrado de 5x5 usando um caractere (ex: #). Dica: O laço externo controla as linhas e o laço interno controla as colunas. A quebra de linha (<br>) deve ser impressa pelo laço externo, após o laço interno terminar.";
echo "<br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "#";
    }
    echo "<br>";
}

echo "<br>";
echo "Modifique o exercício da meia pirâmide para que ela seja impressa de forma invertida.";
echo "<br>";


for($linha = 5; $linha >= 1; $linha--){
    for($coluna = 1; $coluna <= $linha; $coluna++){
        echo "*";
    }
    echo "<br>";
}



$externo = 0;
for($externo = 1; $externo <=10; $externo++) {
    for($interno = 1; $interno <=10; $interno++) {
        echo "Loop interno: $interno <br>";
    }
    echo "Loop <strong>externo</strong>: $externo <br>";
}


// Um número primo é um número natural maior que 1 que só é divisível por 1 e por ele mesmo.
// Escreva um script que verifique e exiba todos os números primos entre 1 e 100.

// Lógica sugerida:
// Use um laço for para percorrer os números de 2 a 100 (número a ser testado).
// Dentro dele, crie uma variável de controle, como $eh_primo = true;.
// Crie um segundo laço for (aninhado) que irá percorrer de 2 até a raiz quadrada do número a ser testado.
// Dentro do segundo laço, verifique se o número a ser testado é divisível por algum número no intervalo. Se for, mude a variável $eh_primo para false e interrompa o laço interno com break;.
// Após o laço interno, verifique se $eh_primo ainda é true. Se for, exiba o número.


for ($num = 2; $num <= 100; $num++) {
    $eh_primo = true;

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $eh_primo = false;
            break;
        }
    }

    if ($eh_primo) {
        echo $num . " ";
    }
}
?>