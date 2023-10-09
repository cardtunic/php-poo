<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Aula 13 - Polimorfismo (Parte 2)</title>
</head>

<body>
    <?php
    require_once("./Animais/Mamifero.php");
    require_once("./Animais/Mamiferos/Lobo.php");
    require_once("./Animais/Mamiferos/Lobos/Cachorro.php");

    $m1 = new Mamifero(50, 4, 4, "Preto");
    $l1 = new Lobo(60, 10, 4, "Branco");
    $c1 = new Cachorro(13, 8, 4, "Marrom");

    $m1->emitirSom();
    $l1->emitirSom();
    $c1->emitirSom();

    // Chamando métodos alternativos ao polimorfismo de sobrecarga

    $c1->reagirFrase("toma comida");
    $c1->reagirHora(19, 12);
    $c1->reagirDono(true);
    $c1->reagirIdadePeso(15, 2);

    var_dump($m1, $l1, $c1);
    ?>
</body>

</html>