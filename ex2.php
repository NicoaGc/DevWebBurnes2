<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feira da Fruta</title>
</head>
<body>
    <h1>Feira da Fruta</h1>
    <?php
    require "frutas.php";
    //print_r($frutas[1]);

    foreach ($frutas as $dados) {
        echo "<P>{$dados['nome']} - {$dados['cor']}</p>";
    }
    ?>
</body>
</html>