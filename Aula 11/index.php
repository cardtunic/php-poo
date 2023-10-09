<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Aula 11 - Herança (Parte 2)</title>
</head>

<body>
    <?php
    require_once("Visitante.php");
    require_once("Professor.php");
    require_once("Aluno.php");
    require_once("Bolsista.php");
    require_once("Tecnico.php");

    // Instanciamento dos objetos

    $visitante = new Visitante("Alfredo", 31, "M");
    $professor = new Professor("Jonas", 23, "NB", "Matemática", 2550.50);
    $aluno = new Aluno("Maria", 24, "F", 1, "Farmácia");
    $bolsista = new Bolsista("Maria", 24, "F", 2, "Informática", 900);
    $tecnico = new Tecnico("Giuseppi", 24, "F", 3, "Técnico em Enfermagem");

    // Usando os métodos

    $visitante->fazerAniv(); // Método herdado da classe Pessoa
    
    $professor->receberAum(20000);
    
    $aluno->pagarMensalidade(300);
    
    $bolsista->renovarBolsa();
    $bolsista->pagarMensalidade(900); // Método sobrescrito herdado da classe Aluno
    
    $tecnico->registroProfissional();
    $tecnico->praticar();
    $tecnico->cancelarMatr(); // Método herdado da classe Aluno

    var_dump(
        $visitante,
        $professor,
        $aluno,
        $bolsista,
        $tecnico
    );
    ?>
</body>

</html>