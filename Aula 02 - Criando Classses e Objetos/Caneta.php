<?php
// Declaração da classe caneta

class Caneta {
    // Declaração dos atributos públicos da classe

    public $modelo;
    public $cor;
    public $ponta;
    public $carga;
    public $tampada;

    // Declaração dos métodos públicos da classe

    function rabiscar() {
        if ($this->tampada) {
        // Utiliza a palavra chave $this, para referênciar a própria classe, acessando assim o atributo $tampada
            echo "<p>Não consigo rabiscar com a caneta tampada :/</p>";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }
    }

    function tampar() {
        $this->tampada = true; // Acessa o valor do atributo $tampada
    }

    function destampar() {
        $this->tampada = false; // Acessa o valor do atributo $tampada
    }
}
?>