<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Aula 14/15 - Projeto Final</title>
</head>

<body>
    <?php
    require_once("Video.php");
    require_once("Gafanhoto.php");
    require_once("Visualizacao.php");

    $video[0] = new Video(
        "Curso POO PHP #14b",
        0,
        0,
        0,
        false
    );

    $video[1] = new Video(
        "Curso POO JAVA #15b",
        0,
        0,
        0,
        false
    );

    $gafanhoto[0] = new Gafanhoto(
        "Kaleb",
        17,
        "M",
        "kaleb1234@",
        0
    );

    $gafanhoto[1] = new Gafanhoto(
        "Jonas",
        24,
        "M",
        "jonas1234@",
        0
    );

    $v1 = new Visualizacao($gafanhoto[0], $video[0]);
    $v1->avaliar();

    var_dump($v1);

    $v2 = new Visualizacao($gafanhoto[0], $video[0]);
    $v2->avaliarNota(10);

    var_dump($v2);
    ?>
</body>

</html>