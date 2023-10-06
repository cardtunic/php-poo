<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    
    <title>Aula 08 - Agregação entre Objetos em PHP</title>
</head>
<body>
    <?php
    require_once("Lutador.php");
    require_once("Luta.php");

    $lutadores = [];

    #region Lutadores
    
    $lutadores[0] = new Lutador(
        "Triturador de Corpos",
        "Brasil",
        29,
        1.97,
        90.6,
        0,
        0,
        0
    );

    $lutadores[1] = new Lutador(
        "Pretty Boy",
        "França",
        31,
        1.75,
        68.9,
        11,
        3,
        1
    );

    $lutadores[2] = new Lutador(
        "Putscript",
        "Brasil",
        29,
        1.68,
        57.8,
        14,
        2,
        3
    );

    $lutadores[3] = new Lutador(
        "Snapshadow",
        "EUA",
        35,
        1.65,
        80.9,
        12,
        2,
        1
    );

    $lutadores[4] = new Lutador(
        "Dead code",
        "Austrália",
        28,
        1.93,
        81.6,
        13,
        0,
        2
    );

    $lutadores[5] = new Lutador(
        "Ufocobol",
        "Brasil",
        37,
        1.70,
        119.3,
        5,
        4,
        3
    );

    #endregion

    // foreach($lutadores as $lutador) { // Passa por cada lutador definido e mostra sua apresentação e status
    //     $lutador->apresentar();
    //     $lutador->stauts();
    // }

    $UEC01 = new Luta();
    $UEC01->marcarLuta($lutadores[3], $lutadores[0]);
    $UEC01->lutar();

    // var_dump($luta);

    var_dump($lutadores[1], $lutadores[2]);
    ?>
</body>
</html>