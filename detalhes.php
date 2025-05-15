<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <h1>Frutas em destaque:</h1>
    <?php
    include "frutas.php";

    $indice = $_GET['indice'];

    echo "<h2>Nome do produto: {$frutas[$indice] ['nome']}</h2>";
    echo "<p>Cor da fruta: {$frutas[$indice] ['cor']}</p>";
    echo "<p>Valor da fruta: {$frutas[$indice] ['valor']}</P>";
    ?>
</body>
</html>