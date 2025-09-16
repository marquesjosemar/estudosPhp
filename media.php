<?php
    //Escreva um algoritmo que calcule a média de 4 números e mostre o resultado.

$mensagem = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['pergunta1'], $_POST['pergunta2'], $_POST['pergunta3'], $_POST['pergunta4'],)){
        $num1= htmlspecialchars($_POST['pergunta1']);
        $num2= htmlspecialchars($_POST['pergunta2']);
        $num3= htmlspecialchars($_POST['pergunta3']);
        $num4= htmlspecialchars($_POST['pergunta4']);
        
            $calculo = ($num1 + $num2 + $num3 + $num4) / 4;
            $mensagem = "<p>Sua média é: " . number_format($calculo, 2) . "</p>";
    }
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
    

<form action="media.php" method="post">
    <label for="pergunta1"> Primeiro Numero:</label>
    <input type="number" name="pergunta1" id=""><br>

    <label for="pergunta1"> Segundo Numero:</label>
    <input type="number" name="pergunta2" id=""><br>

    <label for="pergunta1"> Terceiro Numero:</label>
    <input type="number" name="pergunta3" id=""><br>

    <label for="pergunta1"> Quarto Numero:</label>
    <input type="number" name="pergunta4" id=""><br>
    <button type="submit">enviar</button>

</form>

<?php
        echo "$mensagem";
?>
</body>
</html>