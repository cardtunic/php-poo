<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Aula 09 - Exercício 01</title>
</head>

<body>
    <?php
    require_once("Pessoa.php");
    require_once("Livro.php");

    echo "<h2>Instanciando pessoas...</h2>";

    $pessoas = [];

    $pessoas[0] = new Pessoa("Kaleb", 17, "M");
    $pessoas[1] = new Pessoa("Oslvado", 39, "NB");

    $pessoas[1]->fazerAniver();

    var_dump($pessoas);

    echo "<h2>Instanciando livros...</h2>";

    $livros = [];

    $livros[0] = new Livro("Memórias Póstumas de Brás Cubas", "Machado de Assis", 368, $pessoas[0]);
    $livros[1] = new Livro("JavaScript: O Guia Definitivo", "David Flanagan", 1080, $pessoas[0]);

    $livros[2] = new Livro("Use A Cabeça PHP E MySQL", "Michael Morrison", 808, $pessoas[1]);

    foreach ($livros as $key => $livro) {
        // Passa por cada livro exibindo os detalhes, abrindo, executando ações específicas e ao final fecha e mostra o estado do objeto.
        $livro->detalhes();
        $livro->abrir();

        if ($key === 0) { // Memórias Póstumas de Brás Cubas
            $livro->folhear(300);
        }

        else if ($key === 1) { // JavaScript: O Guia Definitivo
            $livro->avancarPag();
            $livro->avancarPag();
            $livro->avancarPag();

        } else if ($key === 2) { // Use A Cabeça PHP E MySQL
            $livro->folhear(500);
            $livro->voltarPag();
            $livro->fechar();
        }
        
        $livro->fechar();
        var_dump($livro);
    }
    ?>
</body>

</html>