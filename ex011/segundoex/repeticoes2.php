<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estilo teste</title>
    <link rel="stylesheet" href="../../estilo/estilo.css">
</head>
<body>
    <header>
        <h1>Estudos sobre</h1>
        <p><img src="../../estilo/php-logo.webp" alt=""></p><hr color="#59699A">
    </header>
    <main>
        <section>
            Arquivo PHP - Repetições
        </section>
        <div>
            <?php
                $qnt = $_GET['qnt'];
                $cont = 1;
                while ($cont <= $qnt){
                    echo "Valor $cont: <input type='number' placeholder='v$cont' value='v$cont'/><br>";
                    $cont++;
                }
            ?>
        </div>
        <div>
            <a href="repeticoes2.html">Voltar</a>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>