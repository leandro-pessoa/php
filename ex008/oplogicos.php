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
            Arquivo PHP - Direitos políticos passivos
        </section>
        <div>
            <?php
                $idade = $_GET['idade'];
                echo "O candidato tem $idade anos.";
                echo "<br>O candidato ".($idade >= 18 && $idade <= 70 ? 'é obrigado' : 'é facultado'). " a votar.";
                $ver = $idade >= 18 ? 'pode' : 'não pode';
                echo "<br>O candidato $ver concorrer ao cargo de Vereador.";
                $pref_dep = $idade >= 21 ? 'pode' : 'não pode';
                echo "<br>O candidato $pref_dep concorrer ao cargo de Deputado ou Prefeito";
                $gov = $idade >= 30 ? 'pode' : 'não pode';
                echo "<br>O candidato $gov concorrer ao cargo de Governador";
                $pres_sen = $idade >= 35 ? 'pode' : 'não pode';
                echo "<br>O candidato $pres_sen concorrer ao cargo de Presidente ou Senador";
                ?>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>