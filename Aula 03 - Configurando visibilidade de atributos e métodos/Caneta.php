<?php
// Declaração da classe caneta

class Caneta {
    // Declaração dos atributos da classe

    // Atributos públicos

    public $modelo;
    public $cor;

    // Atributos privados

    private $ponta;

    // Atributos protegidos

    protected $carga;
    protected $tampada;

    // Declaração dos métodos públicos da classe

    public function rabiscar() {
        if ($this->tampada) {
        // Utiliza a palavra chave $this, para referênciar a própria classe, acessando assim o atributo $tampada
            echo "<p>Não consigo rabiscar com a caneta tampada :/</p>";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }
    }

    public function tampar() {
        $this->tampada = true; // Acessa o valor do atributo $tampada
    }

    public function destampar() {
        $this->tampada = false; // Acessa o valor do atributo $tampada
    }
}
?>