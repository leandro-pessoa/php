<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
</head>
<style>
    body{
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
    main{
        height: auto;
    }
    div{
        padding-top:0px;
    }
    table{
        border: 1px solid black;
    }
    td{
        padding: 5px;
    }
</style>
<body>
    <header>
        <h1>Estudos sobre</h1>
        <p><img src="../estilo/php-logo.webp" alt=""></p><hr color="#59699A">
    </header>
    <main>
        <section>
            Arquivo PHP - Vetores
        </section>
        <pre>
            <div>
                <?php
                    $list = [1, 2, 3];
                    $list[] = 4;
                    print_r($list);
                ?>
            </div>
            <div>
                <?php
                    $list = range(0, 10, 2);
                    print_r($list);
                ?>
            </div>
            <div>
                <?php
                    $list = [1,2,3,4,5];
                    foreach($list as $i){
                        echo "$i ";
                    }
                ?>               
            </div>
            <div>
                <?php
                    $list = array("letra a" => "a", 3 => "b", 6 => "c");
                    unset($list[6]);
                    print_r($list);
                    foreach($list as $camp => $val){
                        echo "O campo $camp possui o valor $val.<br>";
                    }
                ?>
            </div>
            <div>
                <?php
                    $matriz = [[1,2], [3,4], [5,6]];
                    $matriz [0] [1] = 3;
                    print_r($matriz);
                    
                ?>
            </div>
        </pre>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>