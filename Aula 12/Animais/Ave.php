<?php
require_once(__DIR__. "/../Animal.php");

class Ave extends Animal {
    #region ATRIBUTOS
    private string $corPena;
    #endregion

    function __construct(float $peso, int $idade, int $membros, string $corPena) {
        parent::__construct($peso, $idade, $membros);
        $this->corPena = $corPena;
    }
    
    #region Getters
    public function getCorPena(): string {
        return $this->corPena;
    }
    #endregion

    #region Setters
    public function setCorPena(string $corPena) {
        $this->corPena = $corPena;
    }
    #endregion

    #region MÉTODOS PÚBLICOS
    public function locomover() {
        echo "<p>Voando...</p>";
    }

    public function alimentar() {
        echo "<p>Comendo frutas...</p>";
    }

    public function emitirSom() {
        echo "<p>Emitindo som de ave...</p>";
    }

    public function fazerNinho() {
        echo "<p>Construi um ninho.</p>";
    }
    #endregion
}
?>