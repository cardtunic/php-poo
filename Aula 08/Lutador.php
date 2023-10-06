<?php
require_once("ILutador.php"); // Importa a interface ILutador para o arquivo atual

class Lutador implements ILutador { // Declaração da classe Lutador que implementa a interface ILutador
    #region ATRIBUTOS
    
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    #endregion

    #region MÉTODOS ESPECIAIS
    
    function __construct(
        $nome,
        $nacionalidade,
        $idade,
        $altura,
        $peso,
        $vitorias,
        $derrotas,
        $empates
    ) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;

        $this->setPeso($peso);
        // Método setter utilizado para automatizar a atribuição de um valor para propriedade categoria

        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }
    
    #region Getters

    public function getNome() {
        return $this->nome;
    }

    private function getNacionalidade() {
        return $this->nacionalidade;
    }
    private function getIdade() {
        return $this->idade;
    }
    private function getAltura() {
        return $this->altura;
    }
    private function getPeso() {
        return $this->peso;
    }
    
    public function getCategoria() {
        return $this->categoria;
    }

    private function getVitorias() {
        return $this->vitorias;
    }

    private function getDerrotas() {
        return $this->derrotas;
    }

    private function getEmpates() {
        return $this->empates;
    }
    
    #endregion

    #region Setters

    private function setNome($nome) {
        $this->nome = $nome;
    }

    private function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    private function setIdade($idade) {
        $this->idade = $idade;
    }

    private function setAltura($altura) {
        $this->altura = $altura;
    }

    private function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        // Define a categoria conforme as faixas de peso abaixo

        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } else if ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } else if ($this->peso <= 93.9) {
            $this->categoria = "Médio";
        } else if ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    private function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    private function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    private function setEmpates($empates) {
        $this->empates = $empates;
    }


    #endregion

    #endregion

    #region MÉTODOS PÚBLICOS
    
    public function apresentar() // Mostra na tela uma apresentação do lutador, com todas suas informações
    {
        echo
        "
        <p>*Entrando agora no ringue!*</p>
        <h2>{$this->getNome()}</h2>
        <p>-------------------------------</p>
        <p>Vindo de diretamente de {$this->getNacionalidade()}, com {$this->getIdade()} anos de idade,  {$this->getAltura()}m de altura e {$this->getPeso()}kg, está na categoria {$this->getCategoria()}.</p>
        <p>Ele que já ganhou {$this->getVitorias()} lutas, perdeu {$this->getDerrotas()} e empatou {$this->getEmpates()}</p>
        ";
    }

    public function stauts() // Mostra na tela os status do lutador, com nome, nacionalidade e categoria
    {
        echo 
        "
        <div id=\"lutador-status\">
            <p class=\"lutador-nome\">{$this->getNome()}</p>
            <div class=\"lutador-caracteristicas\">
                <p>{$this->getNacionalidade()}</p>
                <p>|</p>
                <p>{$this->getCategoria()}</p>
            </div>
        </div>
        ";
    }

    public function ganharLuta() // Adiciona 1 ao valor atual de vitorias do lutador
    {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() // Adiciona 1 ao valor atual de derrotas do lutador
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta() // Adiciona 1 ao valor atual de empates do lutador
    {
        $this->setEmpates($this->getEmpates() + 1);
    }
    #endregion
}
?>