<?php

require "conexao.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="adicionar.php">adicionar usuario</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>

            <!-- O CRUD READ ESTÁ NO ARQUIVO CONEXAO.PHP -->
        <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?php echo htmlspecialchars($usuario['id']); ?></td>
                <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
                <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                <td>
                    <a href="editar.php?id=<?= htmlspecialchars($usuario['id']); ?>">Editar </a>
                    <a href="excluir.php?id=<?= htmlspecialchars($usuario['id']); ?>">Excluir</a>
                </td>
                
            </tr>
            
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>