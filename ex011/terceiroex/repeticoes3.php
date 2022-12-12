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
                $ini = $_GET['ini'];
                $fim = $_GET['fim'];
                $pas = $_GET['pas'];
                if ($ini < $fim){    
                    while ($ini <= $fim){
                        echo $ini. " ";
                        $ini += $pas;
                    }
                }
                elseif ($ini > $fim){
                    while ($ini >= $fim){
                        echo $ini. " ";
                        $ini -= $pas;
                    }
                }
                else{
                    echo "O início não pode ser igual ao fim.";
                }
            ?>
        </div>
        <div>
            <a href="repeticoes3.html">Voltar</a>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>