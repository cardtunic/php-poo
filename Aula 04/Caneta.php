<?php
// Declaração da classe caneta

class Caneta {
    // ATRIBUTOS

    private $modelo;
    private $ponta;
    private $cor;

    protected $carga;
    protected $tampada;

    // MÉTODOS ESPECIAIS

    // Constructor

    // Sem parâmetros

    // function __construct()
    // {
    //     $this->tampar();
    //     $this->cor = "Azul";
    // }

    // Com parâmetros

    function __construct($modelo, $cor, $ponta, $carga) {
        $this->setTampada(true); // Define o valor padrão, para caneta iniciar tampada

        // Define os valores dos atributos com base nos parâmetros recebidos

        $this->setModelo($modelo); 
        $this->setPonta($ponta);
        $this->setCarga($carga);
        $this->setCor($cor);
    }
    
    // Getters
    
    public function getModelo() {
        return $this->modelo;
    }
    
    public function getPonta() {
        return $this->ponta;
    }
    
    public function getCor() {
        return $this->cor;
    }

    public function getCarga() {
        return $this->carga;
    }

    public function getTampada() {
        return $this->tampada;
    }

    // Setters

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function setCarga($carga) {
        $this->carga = $carga;
    }

    public function setTampada($tampada) {
        $this->tampada = $tampada;
    }

    // MÉTODOS PÚBLICOS

    public function rabiscar() {
        if ($this->tampada) {
        // Utiliza a palavra chave $this, para referênciar a própria classe, acessando assim o atributo $tampada
            echo "<p>Não consigo rabiscar com a caneta tampada :/</p>";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }
    }
}
?>