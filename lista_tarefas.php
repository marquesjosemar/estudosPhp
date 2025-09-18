<?php
// iniciar sessão
session_start();

// inicializa array de tarefas
if (!isset($_SESSION['tarefas'])) {
    $_SESSION['tarefas'] = [];
}

// tratar somente requisições POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 1) ADICIONAR tarefa
    if (isset($_POST['adicionar'])) {
        $tarefaTexto = trim((string)($_POST['tarefa'] ?? ''));
        if ($tarefaTexto !== '') {
            $_SESSION['tarefas'][] = [
                'id' => uniqid('', true),
                'texto' => $tarefaTexto,
                'concluida' => false
            ];
        }
        // PRG: evita reenvio ao dar refresh
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

    // 2) EXCLUIR tarefa por ID
    if (isset($_POST['excluir'])) {
        $idExcluir = trim((string)($_POST['excluir'] ?? ''));
        if ($idExcluir !== '') {
            // capturamos $idExcluir dentro da closure com `use`
            $_SESSION['tarefas'] = array_values(array_filter($_SESSION['tarefas'], function($t) use ($idExcluir) {
                // garante que tarefas sem 'id' também sejam mantidas (ou removidas)
                return (($t['id'] ?? '') !== $idExcluir);
            }));
        }
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

    // 3) MARCAR como concluída (por ID)
    if (isset($_POST['concluir'])) {
        $idConcluir = trim((string)($_POST['concluir'] ?? ''));
        if ($idConcluir !== '') {
            // percorre por referência para modificar o array na sessão
            foreach ($_SESSION['tarefas'] as &$t) {
                if (($t['id'] ?? '') === $idConcluir) {
                    $t['concluida'] = true;
                    break;
                }
            }
            // sempre dar unset na referência depois de usar foreach por referência
            unset($t);
        }
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
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
        form.inline { display:inline; margin-left:8px; }
        button { cursor:pointer; }
    </style>
</head>
<body>
    <h1>Minha Lista de Tarefas</h1>

    <!-- Form para adicionar -->
    <form method="post">
        <input type="text" name="tarefa" placeholder="Digite uma nova tarefa" required>
        <input type="submit" name="adicionar" value="Adicionar">
    </form>

    <h2>Tarefas</h2>
    <?php if (empty($_SESSION['tarefas'])): ?>
        <p>Nenhuma tarefa adicionada.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($_SESSION['tarefas'] as $tarefa): ?>
                <?php $concluida = !empty($tarefa['concluida']); ?>
                <li class="tarefa <?= $concluida ? 'concluida' : '' ?>">
                    <?= htmlspecialchars($tarefa['texto'], ENT_QUOTES, 'UTF-8') ?>

                    <!-- Form para concluir (usa ID) -->
                    <?php if (!$concluida): ?>
                        <form method="post" class="inline">
                            <input type="hidden" name="concluir" value="<?= htmlspecialchars($tarefa['id'], ENT_QUOTES, 'UTF-8') ?>">
                            <button type="submit">Concluir</button>
                        </form>
                    <?php endif; ?>

                    <!-- Form para excluir (usa ID) -->
                    <form method="post" class="inline">
                        <input type="hidden" name="excluir" value="<?= htmlspecialchars($tarefa['id'], ENT_QUOTES, 'UTF-8') ?>">
                        <button type="submit">Excluir</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
