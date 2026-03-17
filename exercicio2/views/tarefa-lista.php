<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas tarefas</title>
    <style> 
        .concluida {
            color: green;
            text-decoration: line-through;
        }

        .pendente {
            color:red;
        }
    </style>
</head>
<body>
    <h1>Lista de Tarefas</h1>
    <ul>
        <?php foreach ($listaTarefas as $tarefa): ?>
            <li class="<?php echo $tarefa['concluida'] ? 'concluida' : 'pendente'; ?>">
                <?php echo htmlspecialchars($tarefa['nome']); ?>
                <strong>(<?php echo $tarefa['concluida'] ? 'Feito' : 'Pendente'; ?>)</strong>
            </li>
        <?php endforeach; ?>
    </ul>

    <hr>
    <h3>Nova Tarefa</h3>
    <form action="index.php?acao=salvar" method="POST">
        <input type="text" name="nome_tarefa" placeholder="Digite a tarefa..." required>
        <button type="submit">Adicionar</button>
    </form>
</body>
</html>