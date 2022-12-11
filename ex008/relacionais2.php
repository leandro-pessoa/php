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
            Arquivo PHP - Diferença entre igual e idêntico
        </section>
        <div>
            <?php
                $a = 3;
                $b = (float)3;
                $res = $a == $b ? 'sim' : 'não';
                echo "Os valores a e b são iguais? $res.";
                $res2 = $a === $b ? 'sim' : 'não';
                echo "<br>Os valores a e b são idênticos? $res2."
            ?>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>