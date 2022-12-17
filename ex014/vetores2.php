<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
    <style>
        body{
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        main{
            height: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Estudos sobre</h1>
        <p><img src="../estilo/php-logo.webp" alt=""></p><hr color="#59699A">
    </header>
    <main>
        <section>
            Arquivo PHP - Vetores
        </section>
        <div>
            <h2>Função count</h2>
            <?php
                $l = [1, 2, 30, 90, 4, 7, 8];
                $to = count($l);
                echo "A lista tem $to valores.";
            ?>
        </div>
        <pre>
            <div>
                <h2>array_push</h2>
                <?php
                    $l = [1, 2, 3];
                    print_r($l);
                    array_push($l, 4);
                    print_r($l);
                ?>
            </div>
        </pre>
        <pre>
            <div>
                <h2>array_pop</h2>
                <?php
                    $l = [1, 2, 3];
                    print_r($l);
                    array_pop($l);
                    print_r($l);
                ?>
            </div>
        </pre>
        <pre>
            <div>
                <h2>array_unshift</h2>
                <?php
                    $l = [1, 2, 3];
                    print_r($l);
                    array_unshift($l, 0);
                    print_r($l);
                ?>
            </div>
        </pre>
        <pre>
            <div>
                <h2>array_shift</h2>
                <?php
                    $l = [0, 1, 2, 3];
                    print_r($l);
                    array_shift($l);
                    print_r($l);
                ?>
            </div>
        </pre>
        <pre>
            <div>
                <h2>sort</h2>
                <?php
                    $l = [2, 1, 4, 5, 3];
                    print_r($l);
                    sort($l);
                    print_r($l);
                ?>
            </div>
        </pre>
        <pre>
            <div>
                <h2>rsort</h2>
                <?php
                    $l = [1, 2, 3, 4, 5];
                    print_r($l);
                    rsort($l);
                    print_r($l);
                ?>
            </div>
        </pre>
        <pre>
            <div>
                <h2>asort</h2>
                <?php
                    $l = [4, 2, 1, 5, 3];
                    print_R($l);
                    asort($l);
                    print_r($l);
                ?>
            </div>
        </pre>
        <pre>
            <div>
                <h2>arsort</h2>
                <?php
                    $l = [1, 2, 3, 4, 5];
                    print_r($l);
                    arsort($l);
                    print_r($l);
                ?>
            </div>
        </pre>
        <pre>
            <div>
                <h2>ksort</h2>
                <?php
                    $l = [2 => 1, 3 => 2, 0 => 3, 1 => 4];
                    print_r($l);
                    ksort($l);
                    print_r($l);                
                ?>
            </div>
        </pre>
        <pre>
            <div>
                <h2>krsort</h2>
                <?php
                    $l = [1, 2, 3, 4, 5];
                    print_r($l);
                    krsort($l);
                    print_r($l);
                ?>
            </div>
        </pre>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>