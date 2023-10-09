<?php
require_once(__DIR__."/../../Animais/Mamifero.php");

class Cachorro extends Mamifero {
    function __construct(float $peso, int $idade, int $membros, string $corPelo) {
        parent::__construct($peso, $idade, $membros, $corPelo);
    }
    
    #region MÉTODOS PÚBLICOS
    public function emitirSom() {
        echo "<p>Au! Au! Au!</p>";
    }

    public function enterrarOsso() {
        echo "<p>Enterrou o osso.</p>";
    }

    public function abanarRabo() {
        echo "<p>Abanando rabo...</p>";
    }
    #endregion
}
?>