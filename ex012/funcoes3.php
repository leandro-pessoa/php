<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
</head>
<body>
    <header>
        <h1>Estudos sobre</h1>
        <p><img src="../estilo/php-logo.webp" alt=""></p><hr color="#59699A">
    </header>
    <main>
        <section>
            Arquivo PHP - Funções
        </section>
        <div>
            <?php
                function teste(&$x){
                    $x += 2;
                    echo "O valor de X é $x";
                }
                $a = 3;
                teste($a);
                echo "<br>O valor de A é $a"
            ?>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>