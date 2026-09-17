<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Arrays</h1>
    <?php
    $llista_esports = ["futbol", "basquet", "volei"];
    echo $llista_esports[0];
    echo $llista_esports[3]; //aquest dona error

    for ($i = 0; $i < sizeof($llista_esports); $i++) {
        echo $llista_esports[$i] . "<br>";
    }
    ?>

    <h1>Arrays associatiu</h1>
    <?php
    $persona = [
        "nom" => "pere",
        "cognom" => "sanchez",
        "edat" => 24
    ];

    var_dump($persona);

    foreach ($persona as $key => $value) {
        echo "<br> LA clau es " . $key . " i el valor es " . $value;
    }

    echo "El valor del nom: " . $persona["nom"]
    ?>

    <h1>Funcions d'arrays</h1>
    <?php
    var_dump(array_keys($persona));
    echo "<br>";
    var_dump(array_values($persona));
    echo "<br>";
    //Afegir un camp a l'array
    $persona['email'] = "elmail@mail.com";
    echo "<pre>";
    print_r($persona);
    echo "</pre>";

    //eliminar un camp
    unset($persona['edat']);
    echo "<pre>";
    print_r($persona);
    echo "</pre>";
    $llista_persones = [];
    array_push($llista_persones, $persona);
    
    echo "<pre>";
    print_r($llista_persones);
    echo "</pre>";
    //Afegim una 2a persona a la llista de persones
    $persona2 = [
        "nom" => "Toni",
        "cognom" => "Fernandez",
        "email" => "toni@toni.es"
    ];
    array_push($llista_persones, $persona2);
    echo "<pre>";
    print_r($llista_persones);
    echo "</pre>";

    //visualitza la llista de persona
    foreach ($llista_persones as  $persona) {
        print_r($persona);
    }


    ?>
</body>

</html>