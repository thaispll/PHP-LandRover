<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do produto</title>
</head>
<body>
    <h2>Detalhes do Produto</h2>
    <ul>
        <li><strong>Nome:</strong> <?= $produto['nome'] ?></li>
        <li><strong>Preço:</strong> <?= number_format($produto['preco'], 2, ',', '.') ?></li>
    </ul>
    <a href="index.php">Voltar para a lista</a>
</body>
</html>