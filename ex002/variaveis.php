<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variáveis</h1>
    <?php
        $numero = 5;
        $nome = 'Leandro';
        $flutuante = 7.5;
        $booleano = false;
        echo $numero, '<br>';
        echo $nome, '<br>';
        echo $flutuante, '<br>';
        echo $booleano, '<br>';
        echo (int)$flutuante, '<br>';
        echo (float)$numero;
    ?>
</body>
</html>