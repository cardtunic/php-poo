<?php
require_once(__DIR__. "/../Animal.php");

class Peixe extends Animal {
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
        echo "<p>Nadando...</p>";
    }

    public function alimentar() {
        echo "<p>Comendo substâncias...</p>";
    }

    public function emitirSom() {
        echo "<p>Não faz som...</p>";
    }

    public function soltarBolha() {
        echo "<p>Soltou uma bolha.</p>";
    }
    #endregion
}
?>