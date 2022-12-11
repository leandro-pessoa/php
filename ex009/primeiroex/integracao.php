<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estilo teste</title>
    <link rel="stylesheet" href="../../estilo/estilo.css">
</head>
<style>
    a{
        text-decoration: none;
        color: white;
    }
    a:hover{
        font-weight: bolder;
    }
</style>
<body>
    <header>
        <h1>Estudos sobre</h1>
        <p><img src="../../estilo/php-logo.webp" alt=""></p><hr color="#59699A">
    </header>
    <main>
        <section>
            Arquivo PHP - integração com o HTML
        </section>
        <div>
            <h2>Calculador de raiz quadrada</h2>
            <?php
                $valor = $_POST['valor'];
                $raiz = sqrt($valor);
                echo "<br>A raiz quadrada de $valor é igual a ". number_format($raiz, 2)
            ?>
        </div>
        <div>
            <a href="integracaohtml.html">Voltar</a>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>