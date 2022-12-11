<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estilo teste</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
</head>
<body>
    <header>
        <h1>Estudos sobre</h1>
        <p><img src="../estilo/php-logo.webp" alt=""></p><hr color="#59699A">
    </header>
    <main>
        <section>
            Arquivo PHP - Funções aritméticas
        </section>
        <div>
            <?php
                $n1 = -3;
                echo "O valor absoluto de $n1 é ". abs($n1). '<br>';
                $v1 = 2;
                $v2 = 3;
                echo "$v1<sup>$v2</sup> é igual a ". pow($v1, $v2). '<br>';
                $raiz = 9;
                echo "A raiz quadrada de $raiz é ". sqrt($raiz).'<br>';
                $rou = 3.4;
                echo "O valor arredondado de $rou é ". round($rou).'<br>';
                $inte = 6.8;
                echo "A parte inteira de $inte é igual a ". intval($inte). '<br>';
                $form = 4.500;
                echo "O número $form com 2 casas decimais é igual a ". number_format($form, 2).'<br>';
                echo number_format(8000, 2, ",", ".")
            ?>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>