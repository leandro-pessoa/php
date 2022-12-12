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
                $cont = $num;
                $qnt = 0;
                echo "Valores múltiplos: ";
                for($num; $num >= 1; $num--){
                    if($cont % $num == 0){
                        echo "$num ";
                        $qnt++;
                    }
                }
                echo "<br>Total de múltiplos: $qnt";
                if($qnt == 2){
                    echo "<br>Resultado: ".$_GET['num']." é primo.";
                }
                else{
                    echo "<br>Resultado: ". $_GET['num']." não é primo.";
                }
                
            ?>
        </div>
        <div>
            <a href="repeticoes8.html">Voltar</a>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>