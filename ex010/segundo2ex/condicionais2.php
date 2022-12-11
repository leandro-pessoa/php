<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas condicionais</title>
    <link rel="stylesheet" href="../../estilo/estilo.css">
    <style>
        a{
            margin-left: 10px;
            text-decoration: none;
            color: white;
        }
        a:hover{
            font-weight: bold;
        }
        p{
            margin-top: 5px;
        }
    </style>
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
                $n1 = $_GET['n1'];
                $n2 = $_GET['n2'];
                $media = ($n1 + $n2) / 2;
                echo "A média é igual a $media e o aluno está ";
                if ($media >= 7){
                    echo "APROVADO";
                }
                elseif ($media >= 5 && $media < 7){
                    echo "em RECUPERAÇÃO";
                }
                else{
                    echo "REPROVADO";
                }
            ?>
            <p>
                <a href="condicionais2.html">Voltar</a>
            </p>
        </div>
        
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>