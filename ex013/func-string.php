<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções string</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
    <style>
        body{
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed; 
        }
        div{
            padding: 0px;
            padding-left: 20px;
            padding-top: 20px;
        }
        main{
            height: auto;
            padding-bottom: 10px;
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
            Arquivo PHP - Funções string
        </section>
        <div>
            <h2>printf</h2>
            <?php
                $produto = "leite";
                $preco = 4.5;
                printf ("O %s vale %.2f", $produto, $preco);
            ?>
        </div>
        <div>
            <h2>print_r</h2>
            <?php
                $v[0] = 5;
                $v[1] = 6;
                $v[2] = 7;
                var_dump($v);
            ?>
        </div>
        <div>
            <h2>wordwrap</h2>
            <?php
                $txt = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis veniam voluptas quod, iste rerum dolorum id eligendi aut, minus adipisci illum eveniet similique officia. Vitae ipsa architecto et odio nam?";
                $res = wordwrap($txt, 40, "<br>\n");
                echo $res;
            ?>
        </div>
        <div>
            <h2>strlen</h2>
            <?php
                $nome = "Leandro Pessoa";
                echo strlen($nome);
            ?>
        </div>
        <div>
            <h2>trim</h2>
            <?php
                $nome = "   Leandro Pessoa   ";
                echo strlen($nome)."<br>";
                $novo = trim($nome);
                echo strlen($novo);
            ?>
        </div>
        <div>
            <h2>str_word_count</h2>
            <?php
                $frase = "Vou estudar PHP";
                echo str_word_count($frase, 0);
            ?>
        </div>
        <div>
            <h2>explode</h2>
            <?php
                $nome = "leandro,pessoa";
                print_r(explode(",", $nome)); //a vírgula é o separador
            ?>
        </div>
        <div>
            <h2>str_split</h2>
            <?php
                $nome = "Leandro";
                print_r(str_split($nome));
            ?>
        </div>
        <div>
            <h2>implode</h2>
            <?php
                $vetor[0] = "Leandro";
                $vetor[1] = "Pessoa";
                echo implode("#", $vetor);
            ?>
        </div>
        <div>
            <h2>strtolower</h2>
            <?php
                $nome = "LEANDRO PESSOA";
                echo strtolower($nome);
            ?>
        </div>
        <div>
            <h2>strtoupper</h2>
            <?php
                $nome = "leandro pessoa";
                echo strtoupper($nome);
            ?> 
        </div>
        <div>
            <h2>ucfirst</h2>
            <?php
                $nome = "leandro pessoa";
                echo ucfirst($nome);
            ?>
        </div>
        <div>
            <h2>ucwords</h2>
            <?php
                $nome = 'leandro pessoa';
                echo ucwords($nome);
            ?>
        </div>
        <div>
            <h2>strrev</h2>
            <?php
                $nome = 'Leandro';
                echo strrev($nome);
            ?>
        </div>
        <div>
            <h2>strpos</h2>
            <?php
                $nome = "Leandro Pessoa";
                echo strpos($nome,"Pessoa");
            ?>
        </div>
        <div>
            <h2>stripos</h2>
            <?php
                $nome = "Leandro PESSOA";
                echo stripos($nome, "pessoa");
            ?>
        </div>
        <div>
            <h2>substr_count</h2>
            <?php
                $nome = "Leandro Pessoa Pessoa";
                $cont = substr_count($nome, "Pessoa");
                echo "A palavra Pessoa apareceu na frase $cont vezes";
            ?>
        </div>
        <div>
            <h2>substr</h2>
            <?php
                $nome = "Leandro Pessoa";
                echo substr($nome, 8);
            ?>
        </div>
        <div>
            <h2>str_pad</h2>
            <?php   
                $nome = "Leandro";
                $pad = str_pad($nome, 20, ".", STR_PAD_LEFT);
                echo "Eu sou $pad Pessoa"
            ?>
        </div>
        <div>
            <h2>str_repeat</h2>
            <?php
                $a = "a";
                $txt = str_repeat($a, 20);
                echo $txt;
            ?>
        </div>
        <div>
            <h2>str_replace</h2>
            <?php
                $frase = "Eu sou Leandro Silva";
                $nova = str_replace("Silva", "Pessoa", $frase);
                echo $nova;
            ?>
        </div>
    </main>
    <footer>
        &copy; Leandro Pessoa
    </footer>
</body>
</html>