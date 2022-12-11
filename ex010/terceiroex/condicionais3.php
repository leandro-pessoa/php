<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas condicionais</title>
    <link rel="stylesheet" href="../../estilo/estilo.css">
</head>
<body>
    <header>
        <h1>Estudos sobre</h1>
        <p><img src="../../estilo/php-logo.webp" alt=""></p><hr color="#59699A">
    </header>
    <main>
        <section>
            Arquivo PHP - Estruturas condicionais
        </section>
        <div>
            <?php
                $num = $_GET['num'];
                $op = $_GET['op'];
                echo "O valor digitado foi $num<br>";
                switch ($op){
                    case 1: 
                        echo "A raiz quadrada de $num é ".number_format(sqrt($num),2);
                        break;
                    case 2:
                        echo "O quadrado de $num é ".($num * $num);
                        break;
                    case 3:
                        echo "O cubo de $num é ".($num * $num * $num);
                        break;
                    default:
                        echo "";
                }
            ?>
        </div>
        <div>
            <a href="condicionais3.html">Voltar</a>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>