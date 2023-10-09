<?php
require_once(__DIR__. "/../Animal.php");

class Reptil extends Animal {
    #region ATRIBUTOS
    private string $corEscama;
    #endregion

    function __construct(float $peso, int $idade, int $membros, string $corEscama) {
        parent::__construct($peso, $idade, $membros);
        $this->corEscama = $corEscama;
    }
    
    #region Getters
    public function getCorEscama(): string {
        return $this->corEscama;
    }
    #endregion

    #region Setters
    public function setCorEscama(string $corEscama) {
        $this->corEscama = $corEscama;
    }
    #endregion

    #region MÉTODOS PÚBLICOS
    public function locomover() {
        echo "<p>Rastejando...</p>";
    }

    public function alimentar() {
        echo "<p>Comendo vegetais...</p>";
    }
    public function emitirSom() {
        echo "<p>Emitindo som de réptil...</p>";
    }
    #endregion
}
?>