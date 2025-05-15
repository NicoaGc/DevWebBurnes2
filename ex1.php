<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com array</title>
</head>
<body>
    <h1>Arrays</h1>
    <?php
    echo "<p>Vamos aprender arrays</p>";

    $nome = "Anderson Burnes";
    $carros = array("Marea 24V", "Civic", "Fusca", "Palio", "Jetta TSI", "Jetta GLI", "Lamborghini" );

    print_r($carros);

    echo $carros[1];

    foreach ($carros as $dados) {
        echo "<p>{$dados}</p>";
    }
    array_push($carros, "Civic");
    array_push($carros, "Fusca");

    foreach($carros as $dados) {
        echo "<p>{$dados}</p>";
    }

if (in_array("Monza", $carros)) {
    echo "<p>Monza encontrado!</p>";
}else {
    echo "<p>Monza não encontrado!</p>";
}

unset($carros[1]);
print_r($carros);

$carros[1] = "Corcel";
print_r($carros);
    ?>
</body>
</html>