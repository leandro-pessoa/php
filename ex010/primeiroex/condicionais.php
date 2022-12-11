<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas condicionais</title>
    <link rel="stylesheet" href="../../estilo/estilo.css">
    <style>
        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            font-weight: bold;
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
                $ano = isset($_GET["ano"]) ? $_GET["ano"] : $ano = 0;
                $idade = date("Y") - $ano;
                echo "Tem $idade anos.<br>";
                if ($idade >= 18 && $idade <= 70){
                    echo "Com essa idade, é obrigado a votar e pode dirigir.";
                }
                elseif ($idade > 70){
                    echo "Pode dirigir e o seu voto é facultativo.";
                }
                elseif ($idade >= 16 && $idade < 18){
                    echo "Seu voto é facultativo e não pode dirigir.";
                }
                else{
                    echo "Não pode nem dirigir nem votar.";
                }
                
                
            ?>
        </div>
        <div>
            <a href="condicionais.html">Voltar</a>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>