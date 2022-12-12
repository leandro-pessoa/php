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
                function soma($a, $b){
                    $s = $a + $b;
                    echo $s;
                }
                soma(10, 20);
            ?>
        </div>
        <div>OU</div>
        <div>
            <?php
                function soma2($a, $b){
                    $s = $a + $b;
                    return $s;
                }
                $result = soma2(10, 20);
                echo $result;
            ?>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>