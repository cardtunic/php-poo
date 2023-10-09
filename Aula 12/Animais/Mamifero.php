<?php
require_once(__DIR__. "/../Animal.php");

class Mamifero extends Animal {
    #region ATRIBUTOS
    protected string $corPelo;
    #endregion

    function __construct(float $peso, int $idade, int $membros, string $corPelo) {
        parent::__construct($peso, $idade, $membros);
        $this->corPelo = $corPelo;
    }
    
    #region Getters
    public function getCorPelo(): string {
		return $this->corPelo;
	}
    #endregion

    #region Setters
    public function setCorPelo(string $corPelo) {
		$this->corPelo = $corPelo;
	}
    #endregion

    #region MÉTODOS PÚBLICOS
    public function locomover() {
        echo "<p>Correndo...</p>";
    }

    public function alimentar() {
        echo "<p>Mamando...</p>";
    }
    public function emitirSom() {
        echo "<p>Emitindo som de mamífero...</p>";
    }
    #endregion
}
?>