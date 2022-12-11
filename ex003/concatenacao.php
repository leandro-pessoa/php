<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
</head>
<body>
<header>
        <h1>Estudos sobre</h1>
        <p><img src="../estilo/php-logo.webp" alt=""></p><hr color="#59699A">
    </header>
    <main>
        <section>
            Arquivo PHP - Concatenação
        </section>
        <div>
            <!--ESCREVA AQUI O CÓDIGO-->
            <?php
                $nome = "Leandro";
                $idade = 18;
                echo $nome. ' tem '. $idade. ' anos.', '<br>';
                echo "$nome tem $idade anos.";
            ?>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>