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
                function soma(){
                    $list = func_get_args();
                    $total = func_num_args();
                    $soma = 0;
                    for ($c = 0; $c < $total; $c++){
                        $soma += $list[$c]; 
                    }
                    return $soma;
                }
                $result = soma(10, 20, 30, 40, 50);
                echo $result;
            
            ?>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>