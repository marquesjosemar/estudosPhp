<?php
// Iniciar a sessão
session_start();

// Inicializar a lista de tarefas se não existir
if (!isset($_SESSION['tarefas'])) {
    $_SESSION['tarefas'] = [];
}

// Adicionar tarefa
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['adicionar'])) {
    $tarefa = trim($_POST['tarefa']);
    if (!empty($tarefa)) {
        $_SESSION['tarefas'][] = [
            'texto' => $tarefa,
            'concluida' => false
        ];
    }
}

// Marcar tarefa como concluída
if (isset($_GET['concluir'])) {
    $indice = $_GET['concluir'];
    if (isset($_SESSION['tarefas'][$indice])) {
        $_SESSION['tarefas'][$indice]['concluida'] = true;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .tarefa { margin: 10px 0; }
        .concluida { text-decoration: line-through; color: gray; }
    </style>
</head>
<body>
    <h1>Minha Lista de Tarefas</h1>

    <!-- Formulário para adicionar tarefa -->
    <form method="post">
        <input type="text" name="tarefa" placeholder="Digite uma nova tarefa" required>
        <input type="submit" name="adicionar" value="Adicionar">
    </form>

    <!-- Lista de tarefas -->
    <h2>Tarefas</h2>
    <?php if (empty($_SESSION['tarefas'])): ?>
        <p>Nenhuma tarefa adicionada.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($_SESSION['tarefas'] as $indice => $tarefa): ?>
                <li class="tarefa <?php echo $tarefa['concluida'] ? 'concluida' : ''; ?>">
                    <?php echo htmlspecialchars($tarefa['texto']); ?>
                    <?php if (!$tarefa['concluida']): ?>
                        <a href="?concluir=<?php echo $indice; ?>">Concluir</a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>