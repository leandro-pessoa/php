<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetições</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
</head>
<body>
    <header>
        <h1>Estudos sobre</h1>
        <p><img src="../estilo/php-logo.webp" alt=""></p><hr color="#59699A">
    </header>
    <main>
        <section>
            Arquivo PHP - Repetições
        </section>
        <div>
            <?php
                $n = 1;
                while ($n <= 10){
                    echo $n. " ";
                    $n++;
                }
            ?>
        </div>
        <div>OU</div>
        <div>
            <?php
                $n2 = 10;
                while ($n2 >= 1){
                    echo $n2. " ";
                    $n2 -= 1;
                }
            ?>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>