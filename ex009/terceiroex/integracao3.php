<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $texto = isset($_GET['pa']) ? $_GET['pa'] : "Texto";
        $tam = isset($_GET['tam']) ? $_GET['tam'] : "10pt";
        $cor = isset($_GET['cor']) ? $_GET['cor'] : "#000000";
        $negrito = isset($_GET['neg']) ? $_GET['neg'] : "none";
        $sub = isset($_GET['sub']) ? $_GET['sub'] : "none"
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estilo teste</title>
    <link rel="stylesheet" href="../../estilo/estilo.css">
    <style>
        p{
            color: <?php echo $cor; ?>;
            font-size: <?php echo $tam ?>;
            font-weight: <?php echo $negrito ?>;
            text-decoration: <?php echo $sub ?>;
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
            Arquivo PHP
        </section>
        <div>
            <?php
                echo "<p>$texto</p>";
            ?>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>