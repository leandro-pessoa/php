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
            Arquivo PHP
        </section>
        <div>
            <?php
                $nome = isset($_GET['nome']) ? $_GET['nome'] : "[Não foi informado]";
                $ano = isset($_GET['ano']) ? $_GET['ano'] : "[Não foi informado]";
                $sexo = isset($_GET["sex"]) ? $_GET["sex"] : "[Não foi informado]";
                $idade = date("Y") - $ano;
                echo "<br>$nome é $sexo e tem $idade anos de idade."
            ?><br>
            <a href="integracao2.html">Voltar</a>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>