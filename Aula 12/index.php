<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Aula 12 - Polimorfismo (Parte 1)</title>
</head>

<body>
    <?php
    #region Require
    require_once("./Animais/Mamifero.php");
    require_once("./Animais/Reptil.php");
    require_once("./Animais/Peixe.php");
    require_once("./Animais/Ave.php");

    require_once("./Animais/Mamiferos/Canguru.php");
    require_once("./Animais/Mamiferos/Cachorro.php");
    require_once("./Animais/Repteis/Cobra.php");
    require_once("./Animais/Repteis/Tartaruga.php");
    require_once("./Animais/Peixes/Goldfish.php");
    require_once("./Animais/Aves/Arara.php");
    #endregion

    #region Instanciamento de classes
    // Instanciando mamíferos

    $m1 = new Mamifero(67.3, 2, 4, "Marrom");
    $mamiferos = [
        "canguru" => new Canguru(56, 3, 4, "Marrom"),
        "cachorro" => new Cachorro(13.5, 3, 4, "Preto")
    ];

    // Instanciando répteis

    $r1 = new Reptil(23, 5, 4, "Verde");
    $repteis = [
        "cobra" => new Cobra(10, 5, 0, "Preta"),
        "tartaruga" => new Tartaruga(6, 13, 4, "Marrom")
    ];

    // Instanciando peixes

    $p1 = new Peixe(1, 2, 0, "Azul");
    $goldfish = new Goldfish(0.5, 3, 0, "Dourada");

    // Instanciando aves

    $a1 = new Ave(1, 2, 2, "Vermelha");
    $arara = new Arara(1, 5, 2, "Azul");
    #endregion
    
    #region Mamiferos
    echo "<h2>Mamífero:</h2>";
    $m1->locomover(); // Correndo...
    $m1->alimentar(); // Mamando...
    $m1->emitirSom(); // Emitindo som de mamífero...

    var_dump($m1);
    
    echo "<h3>Canguru:</h3>";
    $mamiferos["canguru"]->locomover(); // Pulando... (Polimorfismo de sobreposição ao método da superclasse Mamifero)
    $mamiferos["canguru"]->usarBolsa();

    echo "<h3>Cachorro:</h3>";
    $mamiferos["cachorro"]->emitirSom(); // Au! Au! Au! (Polimorfismo de sobreposição ao método da superclasse Mamifero)
    $mamiferos["cachorro"]->enterrarOsso();
    $mamiferos["cachorro"]->abanarRabo();
    #endregion

    #region Reptéis
    echo "<h2>Réptil:</h2>";
    $r1->locomover(); // Rastejando... 
    $r1->alimentar(); // Comendo vegetais... 
    $r1->emitirSom(); // Emitindo som de réptil... 

    var_dump($r1);
    
    echo "<h3>Cobra:</h3>";
    $repteis["cobra"]->locomover(); // Rastejando (não sobrepoem o método da superclasse)

    echo "<h3>Tartaruga:</h3>";
    $repteis["tartaruga"]->locomover(); // Se locomvendo beeeeeem devagar... (Polimorfismo de sobreposição ao método da superclasse Mamifero)
    #endregion

    #region Peixes
    echo "<h2>Peixe:</h2>";
    $p1->locomover(); // Nadando...
    $p1->alimentar(); // Comendo substâncias...
    $p1->emitirSom(); // Não faz som......

    var_dump($p1);
    
    echo "<h3>Goldfish:</h3>";
    var_dump($goldfish);
    #endregion

    #region Aves
    echo "<h2>Ave:</h2>";
    $a1->locomover(); // Voando...
    $a1->alimentar(); // Comendo frutas...
    $a1->emitirSom(); // Emitindo som de ave...

    var_dump($a1);

    echo "<h3>Arara:</h3>";
    var_dump($arara);
    #endregion
    ?>
</body>

</html>