<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetições</title>
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
                $num = $_GET['num'];
                $cont = 1;
                # Com o while
                /*
                while($cont <= 10){
                    echo "$num x $cont = ".($num * $cont)."<br>";
                    $cont++;
                }
                */
                # OU com o for
                for ($num; $cont <= 10; $cont++){
                    echo "$num x $cont = ". ($num * $cont)."<br>";
                }
            ?>
        </div>
        <div>
            <a href="repeticoes6.html">Voltar</a>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>