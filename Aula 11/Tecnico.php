<?php
require_once("Aluno.php");

class Tecnico extends Aluno { // Herança para diferença
    function __construct(
        string $nome, 
        int $idade, 
        string $sexo, 
        int $matr, 
        string $curso, 
    ) {
        parent::__construct($nome, $idade, $sexo, $matr, $curso);
        // O construtor da classe pai (Aluno) recebe os parâmetros utilizados pela classe raiz (Pessoa)
    }

    #region MÉTODOS PÚBLICOS
    public function registroProfissional() { // Exibe na tela uma mensagem de registro profissional
        echo "<p>Registro profissional do técnico {$this->getNome()} foi realizado com sucesso!</p>";
    }

    public function praticar() { // Exibe na tela uma mensagem na tela para indicar que o técnico praticou
        echo "<p>{$this->getNome()} praticou.</p>";
    }
    #endregion
}
?>