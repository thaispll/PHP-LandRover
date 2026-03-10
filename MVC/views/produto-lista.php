<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Produtos Disponíveis</h1>
    <ul>
        <?php foreach ($produtos as $produto): ?>
                <li><?php echo $produto['nome']?> - R$ <?php echo $produto['preco']; ?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>