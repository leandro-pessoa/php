<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
</head>
<body>
    <header>
        <h1>Estudos sobre</h1>
        <p><img src="../estilo/php-logo.webp" alt=""></p><hr color="#59699A">
    </header>
    <main>
        <section>
            Arquivo PHP - operadores de atribuição
        </section>
        <div>
            <?php
                $valor = $_GET["preco"];
                echo 'R$'.number_format($valor, 2,  ",", "."). ' foram inseridos.'. '<br>';
                $desc = ($valor / 100) * 10;
                $res = $valor -= $desc;
                echo "O preço com o desconto de 10% é igual a R$". number_format($res, 2, ",", ".");
            ?>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>