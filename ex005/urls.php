<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URLs</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
</head>
<body>
<header>
        <h1>Estudos sobre</h1>
        <p><img src="../estilo/php-logo.webp" alt=""></p><hr color="#59699A">
    </header>
    <main>
        <section>
            Arquivo PHP - Pegando valores de URLs
        </section>
        <div>
            <?php
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                $soma = $n1 + $n2; 
                echo "Valores recebidos: $n1 e $n2.";      
                echo "<br> A soma de $n1 + $n2 é $soma"
            ?>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>