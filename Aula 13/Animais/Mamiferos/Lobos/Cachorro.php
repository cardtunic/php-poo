<?php
require_once(__DIR__."/../../../Animais/Mamiferos/Lobo.php");

class Cachorro extends Lobo {
    function __construct(float $peso, int $idade, int $membros, string $corPelo) {
        parent::__construct($peso, $idade, $membros, $corPelo);
    }
    
    #region MÉTODOS PÚBLICOS
    public function emitirSom() {
        echo "<p>Au! Au! Au!</p>";
    }

    /*
    Os métodos abaixo são uma alternativa ao polimorfismo de sobrecarga, o qual o PHP ainda não suporta.
    Basta declarar métodos de nomes diferentes, porém como prefixos iguais.
    */

    public function reagirFrase(string $frase) {
        $frase = strtolower($frase);
        echo "<p>Você falou para o cachorro \"$frase\" e ele:</p>";

        if ($frase === "toma comida" || $frase === "olá") {
            echo "<p>abanou o rabo e latiu!</p>";
        } else {
            echo "<p>rosnou!</p>";
        }
    }

    public function reagirHora(int $hora, string $min) {
        echo "<p>Você interagiu como cachorro às $hora:$min e ele:</p>";

        if ($hora < 12) {
            echo "<p>abanou o rabo!</p>";
        } else if ($hora >= 18) {
            echo "<p>te ignorou...</p>";
        } else {
            echo "<p>abanou o rabo e latiu!</p>";
        }
    }

    public function reagirDono(bool $dono) {
        
        if ($dono) {
            echo "<p>Você interagiu com seu cachorro e ele:</p>";
            echo "<p>abanou o rabo!</p>";
        } else {
            echo "<p>Você interagiu com cachorro de outra pessoa e ele:</p>";
            echo "<p>rosnou e latiu!</p>";
        }
    }

    public function reagirIdadePeso(int $idade, float $peso) {
        echo "<p>Você interagiu com o cachorro de $idade anos de idade que pesa $peso kg, e ele:</p>";

        if ($idade < 5) {
            if ($peso < 10) {
                echo "<p>abanou o rabo!</p>";
            } else {
                echo "<p>latiu!</p>";
            }
        } else {
            if ($peso < 10) {
                echo "<p>rosnou!</p>";
            } else {
                echo "<p>te ignorou...</p>";
            }
        }
    }
    #endregion
}
?>