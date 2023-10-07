<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Aula 10 - Herança (Parte 1)</title>
</head>

<body>
    <?php
    require_once("Pessoa.php");
    require_once("Aluno.php");
    require_once("Professor.php");
    require_once("Funcionario.php");

    $pessoas = [];
    $pessoas[0] = new Pessoa("João", 31, "M");
    $pessoas[1] = new Aluno("Cláudia", 19, "NB", 0001, "Informática");
    $pessoas[2] = new Professor("Gustvo", 31, "M", "História", 2600.75);
    $pessoas[3] = new Funcionario("Elisângela", 45, "F", "Secretária");

    $pessoas[0]->fazerAniv();

    $pessoas[1]->cancelarMatr();

    $pessoas[2]->receberAum(2000);

    $pessoas[3]->mudarTrabalho();
    $pessoas[3]->fazerAniv();

    foreach ($pessoas as $pessoa) {
        var_dump($pessoa);
    }
    ?>
</body>

</html>