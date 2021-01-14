<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
</head>
<body>
    <ul>
        <?php foreach($vendas as $venda): ?>
        <li><?= $venda ?></li>
        <?php endforeach ?>
    </ul>    
</body>
</html>