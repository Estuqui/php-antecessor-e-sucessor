<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 1</title>
    <link rel="stylesheet" href="stylus.css">

</head>
<body>

   <main>

        <h1>Seu Resultado</h1>

        <?php

            $num = $_REQUEST["num"] ?? 0;

            $ant = $num - 1;
            $suc = $num + 1;
            echo "O número escolhido foi $num";
            echo "<br>O seu antecessor é $ant";
            echo "<br>O seu sucessor é $suc";
            
    
        ?>

    <button onclick="window.location='/index.html'"> Voltar ao início </button>

    </main>
</body>
</html>
