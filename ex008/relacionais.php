<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações relacionais</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
</head>
<body>
    <header>
        <h1>Estudos sobre</h1>
        <p><img src="../estilo/php-logo.webp" alt=""></p><hr color="#59699A">
    </header>
    <main>
        <section>
            Arquivo PHP - Operador unário
        </section>
        <div>
            <?php
                $n1 = $_GET['n1'];
                $n2 = $_GET['n2'];
                $op = $_GET['op'];
                $res = $op == 'x'? $n1 * $n2: $n1 / $n2;
                echo "O resultado foi: $res"
            ?>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>