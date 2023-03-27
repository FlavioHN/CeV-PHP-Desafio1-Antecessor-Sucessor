<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-php.css">
    <title>Antecessor e Sucessor</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
            $num = $_REQUEST["numero"] ?? 0;
            $anterior = $num - 1;
            $sucessor = $num + 1;

            echo "<li>O numero escolhido foi <strong>$num</strong></li>";
            echo "<br><li>O Seu <em>anterior</em> é o <strong>$anterior</strong></li>";
            echo "<br><li>E o que vem <em>após</em> é o <strong>$sucessor</strong></li>";
            ?>
        </p>
        <!-- <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button> -->
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>