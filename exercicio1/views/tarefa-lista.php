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
        <?php foreach ($listaTarefas as $tarefa):?>
            <li class="<?php echo $tarefa['concluida'] ? 'concluida': 'pendente'; ?>">
                <?php echo $tarefa['nome'];?>
                (<?php echo $tarefa['concluida'] ? 'Feito' : 'Pendente'; ?>)
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>