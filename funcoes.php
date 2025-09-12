<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>

<?php
function mostrar($mensagem) {
    echo $mensagem . "<br>";
}
mostrar("Olá, mundo!");

echo "<br>";

function mensagem() {
    echo "Função sem parametros" . "<br>";
}
mensagem();

echo "<br>";

echo "função que retorna um valor" . "<br>";

function soma($a, $b) {
    $resultado = $a + $b;
    return $resultado;
}
echo "A soma é: " . soma(2, 3) . "<br>";
echo "<br>";
echo "Exercício 1 (Arrays): Lista de Compras <br>

Crie um array indexado chamado lista_compras com pelo menos 5 itens (strings).

Use um laço foreach para exibir cada item da lista em uma linha.

Exiba a seguinte frase: 'O segundo item da lista é: [aqui vai o segundo item]'.";
echo "<br>";
echo "------------------" . "<br>";
$lista_compras = [
    "maçã",
    "banana",
    "laranja",
    "uva",
    "pera"
];

foreach ($lista_compras as $item) {
    echo $item . "<br>";
};

echo "O segundo item da lista é: " . $lista_compras[1] . "<br>";

echo "<br>";

// Exercício 2 (Arrays Associativos): Catálogo de Produtos

// Crie um array associativo chamado $produto para guardar informações de um item. Use as chaves: nome, preco e cor.

// Preencha com valores (ex: "Camiseta", 49.99, "Azul").

// Exiba uma frase formatada: "A [nome do produto], na cor [cor], custa R$ [preço]."
echo "Exercício Array Associativo: ";

$produto = [
    "nome" => 'camiseta',
    "preco" => 49.99,
    "cor" => 'Azul'
];

echo "A " . $produto['nome']. "," . " na cor " . $produto['cor'] . "," . " custa R$ " . number_format($produto['preco']) . ' reais.';

echo "<br><br>";

/* 1. Crie um array de arrays (multidimensional) chamado $usuarios, onde cada item interno é um array associativo com as chaves nome e ano_nascimento.

2 . Crie uma função chamada ehMaiorDeIdade que recebe o ano de nascimento como parâmetro. A função deve retornar true se a pessoa tiver 18 anos ou mais, e false caso contrário. (Considere o ano atual, 2025).

3. Use um laço foreach para percorrer o array $usuarios.

A cada iteração, chame a função ehMaiorDeIdade passando o ano de nascimento do usuário.

Exiba o nome de cada usuário e se ele é ou não maior de idade
 */

// 1 . 
$usuarios = [
    ["nome" => "joão", "ano_nascimento" => 1998],
    ["nome" => "Beatriz", 
    "ano_nascimento" => 2008],
    ["nome" => "Felipe", 
    "ano_nascimento" => 2001],
];


// 2. Definir a função ehMaiorDeIdade
function ehMaiorDeIdade($ano_nascimento) {
    $ano_atual = 2025; // Ano atual
    $idade = $ano_atual - $ano_nascimento; // Calcula a idade
    return $idade >= 18; // Retorna true se idade >= 18, false caso contrário
}

// 3. Percorrer o array $usuarios com foreach e exibir resultados
foreach ($usuarios as $usuario) {
    $nome = $usuario["nome"];
    $ano_nascimento = $usuario["ano_nascimento"];
    $maior_de_idade = ehMaiorDeIdade($ano_nascimento); // Chama a função
    
    // Exibe o resultado
    if ($maior_de_idade) {
        echo "$nome é maior de idade.<br>";
    } else {
        echo "$nome não é maior de idade.<br>";
    }
}

echo "<br>";

/* Exercício 5: Média e Situação de Alunos
Neste exercício, vamos processar uma lista de alunos, calcular a média de suas notas e determinar se foram aprovados ou reprovados.

Crie o array de dados: Comece com o seguinte array de alunos. Note que as notas de cada aluno estão dentro de outro array.



Ela deve receber um array de notas como parâmetro.

Dentro da função, calcule a média das notas (some todas as notas e divida pela quantidade de notas).

Dica: Você pode usar a função array_sum() para somar os valores de um array e count() para contar quantos itens ele tem.

Se a média for maior ou igual a 7, a função deve retornar a string "Aprovado".

Caso contrário, a função deve retornar a string "Reprovado".

Processe os dados:

Use um laço foreach para percorrer o array $alunos.

A cada aluno no laço, chame a função calcularSituacao, passando o array de notas daquele aluno.

Exiba o nome do aluno e o resultado retornado pela função. */

//1. array
$alunos = [
    [
        "nome" => "Carla",
        "notas" => [9, 7, 8, 6]
    ],
    [
        "nome" => "Roberto",
        "notas" => [6, 5, 7, 4]
    ],
    [
        "nome" => "Mariana",
        "notas" => [10, 9, 8, 9]
    ],
    [
        "nome" => "Lucas",
        "notas" => [5, 6, 6, 7]
    ]
];

// 2. 
//Crie a função de lógica: Escreva uma função chamada calcularSituacao.
function calcularSituacao($notas){
    
    $media = array_sum($notas) / count($notas); 

    return $media >= 7 ? "Aprovado" : "Reprovado";
     
};

// 3 . 
foreach($alunos as $aluno) {

    $nome = $aluno['nome'];
    $notas = $aluno["notas"];
    $resultado = calcularSituacao($notas); // chama a função
    echo "$nome: $resultado<br>"; 
}
echo "<br>";
echo "---------------------------------------------------------";
echo "<br>";

/* Exercício 6: Controle de Estoque de Produtos
Imagine que você tem uma lista de produtos de uma loja online e precisa exibir quais estão disponíveis para compra com base na quantidade em estoque.

Crie o array de dados:
Crie a função de lógica: Escreva uma função chamada verificarDisponibilidade.
Ela deve receber a quantidade em estoque de um produto como parâmetro.
Se a quantidade for maior que 0, a função deve retornar true.
Caso contrário (se for 0), a função deve retornar false.
Processe os dados:
Use um laço foreach para percorrer o array $produtos.
Dentro do laço, chame a função verificarDisponibilidade passando a quantidade em estoque do produto atual.
Use uma estrutura if/else para verificar o retorno da função.
Exiba o nome do produto e, ao lado, "Disponível em estoque" (em verde) ou "Fora de estoque" (em vermelho). */

$produtos = [
    [
        "nome" => "Notebook Gamer",
        "preco" => 4500.00,
        "estoque" => 15
    ],
    [
        "nome" => "Mouse sem Fio",
        "preco" => 120.50,
        "estoque" => 0
    ],
    [
        "nome" => "Teclado Mecânico",
        "preco" => 299.90,
        "estoque" => 32
    ],
    [
        "nome" => "Monitor 4K",
        "preco" => 1800.00,
        "estoque" => 0
    ]
];

function verificarDisponibilidade($quantidade) {
    // Sua função está perfeita! Nenhuma alteração aqui.
    if ($quantidade < 0) {
        return false; // Trata como fora de estoque
    }
    return $quantidade > 0;
}

$disponiveis = 0;
foreach ($produtos as $produto) {
    $nome = $produto["nome"];
    $quantidade = $produto['estoque'];
    $disponivel = verificarDisponibilidade($quantidade);

    if ($disponivel) {
        $disponiveis++;
        // CORREÇÃO: Padronizamos a saída para ficar consistente, adicionamos o <br> e a cor.
        echo "$nome: <span style='color: green;'>Disponível ($quantidade em estoque)</span><br>";
    } else {
        // Esta parte já estava correta.
        echo "$nome: <span style='color: red;'>Fora de estoque</span><br>";
    }
}

echo "<br><strong>Total de produtos disponíveis: $disponiveis</strong><br>"; // Adicionei um <br> e <strong> para destacar

echo "<br>";
echo "----------------------------------------------------------------------------";
echo "<br>";

/* Exercício 7: Cálculo de Bônus Salarial
Uma empresa quer calcular um bônus de fim de ano para seus funcionários. A regra é: cargos de "Gerente" recebem 15% de bônus sobre o salário, e os demais cargos recebem 10%.

Crie o array de dados
Crie a função de lógica: Escreva uma função chamada calcularBonus.
Ela deve receber dois parâmetros: o salário e o cargo do funcionário.
Dentro da função, use um if para verificar se o cargo é igual a "Gerente".
Se for, a função deve retornar o valor do salário multiplicado por 0.15.
Senão (else), a função deve retornar o valor do salário multiplicado por 0.10.
Processe os dados:
Use um laço foreach para percorrer o array $funcionarios.
A cada funcionário, chame a função calcularBonus passando o salário e o cargo.
Guarde o valor retornado em uma variável $bonus.
Exiba o nome do funcionário, seu cargo e o valor do bônus que ele receberá, formatado como moeda.
Dica: Para formatar como moeda, você pode usar a função number_format($valor, 2, ',', '.');. */


$funcionarios = [
    [
        "nome" => "Arthur",
        "salario" => 8000.00,
        "cargo" => "Gerente"
    ],
    [
        "nome" => "Beatriz",
        "salario" => 3500.00,
        "cargo" => "Analista"
    ],
    [
        "nome" => "Caio",
        "salario" => 4200.00,
        "cargo" => "Desenvolvedor"
    ],
    [
        "nome" => "Daniela",
        "salario" => 9500.00,
        "cargo" => "Gerente"
    ]
];

function calcularBonus($salario, $cargo){
    

    if ($cargo == 'Gerente') {
        return $salario * 0.15;
    } else {
        return $salario *0.10;
    }

}

foreach ($funcionarios as $funcionario) {
    $salario = $funcionario["salario"];
    $cargo = $funcionario["cargo"];
    $bonus = calcularBonus($salario, $cargo);

    echo "Nome: " . $funcionario["nome"] ."," . " Cargo: " . $cargo . " valor do bonus: " . $bonus . "<br>";
}





?>