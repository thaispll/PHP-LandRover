
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Produtos</title>
</head>
<body>
    <h2>Catálogo de Produtos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ação</th>
        </tr>
        <?php foreach($produtos as $produto): ?>
        <tr>
            <td> <?=$produto['id'] ?></td>
            <td> <?=$produto['nome'] ?></td>
            <td> <a href="?id=<?= $produto['id'] ?>">Ver detalhes </a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>
