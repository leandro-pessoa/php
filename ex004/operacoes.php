<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
</head>
<body>
<header>
        <h1>Estudos sobre</h1>
        <p><img src="../estilo/php-logo.webp" alt=""></p><hr color="#59699A">
    </header>
    <main>
        <section>
            Arquivo PHP - Operações aritméticas
        </section>
        <div>
            <?php
                $n1 = 50;
                $n2 = 20;
                $n3 = 30;
                $n4 = 40;
                $soma = $n1 + $n2;
                echo "$n1 + $n2 é igual a $soma <br>";
                $sub = $n1 - $n2;
                echo "$n1 - $n2 é gual a $sub <br>";
                $mul = $n1 * $n2;
                echo "$n1 x $n2 é igual a $mul <br>";
                $div = $n1 / $n2;
                echo "$n1 / $n2 é igual a $div <br>";
                $resto = $n1 % $n2;
                echo "O resto de $n1 / $n2 é igual a $resto <br>";
                echo "A média entre os valores $n1, $n2, $n3 e $n4 é: ". (($n1 + $n2 + $n3 + $n4)/4);
            ?>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>