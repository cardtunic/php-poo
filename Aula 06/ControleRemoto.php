<?php
require_once("Controlador.php"); // Requere a interface Controlador

// Declaração da classe ControleRemoto, que implementa os métodos da interface Controlador

class ControleRemoto implements Controlador {
    #region ATRIBUTOS

    private $volume;
    private $ligado;
    private $tocando;

    #endregion

    #region MÉTODOS ESPECIAIS
    
    function __construct() {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }
    
    #region Getters
    
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    #endregion

    #region Setters

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }
    
    #endregion

    #endregion

    #region MÉTODOS PÚBLICOS

    /* 
    Todos os métodos aqui possuem os mesmos nomes da interface, e eles precisam estar todos presentes,
    seguindo o mesmo padrão estabelecido na interface. Eles são sobrescritos e a implementação de cada
    um deles é definida pela classe.
    */

    public function ligar() { // Muda o estado do controle para ligado, caso esteja desligado
        if (!$this->getLigado()) {
            $this->setLigado(true);
        } else {
            echo "<p>O controle já está ligado.</p>";
        }
    }

    public function desligar() { // Muda o estado do controle para ligado, caso esteja ligado
        if ($this->getLigado()) {
            $this->setLigado(false);
        } else {
            echo "<p>O controle já está ligado.</p>";
        }
    }

    public function abrirMenu() { // Mostra o menu, com informações sobre o estado do controle, volume atual e se está tocando algo
        if (!$this->getLigado()) {
            echo "<p>O controle precisa estar ligado para realizar essa operação.</p>";
            return;
        }

        $barrasVolume = "";
        $mensagemTocando = $this->getTocando() ? "Tocando..." : "Pausado.";
        $mensagemLigado = $this->getLigado() ? "SIM" : "NÃO";

        for ($i = 0; $i < $this->getVolume(); $i += 10) {
            $barrasVolume .= "|";
        }
        
        echo "
            <h2>-----MENU-----</h2>
            <p>Está ligado: $mensagemLigado</p>
            <p>Volume: $barrasVolume ({$this->getVolume()}%)</p>
            <p>$mensagemTocando</p>
        ";
    }

    public function fecharMenu() { // Mostra uma mensagem de fechamento do menu
        echo "<p>Fechando menu...</p>";
    }

    public function maisVolume() { // Adiciona mais 10 ao volume atual
        if (!$this->getLigado()) {
            echo "<p>O controle precisa estar ligado para realizar essa operação.</p>";
            return;
        }

        if ($this->getVolume() < 100) {
            $this->setVolume($this->getVolume() + 10);
        }
    }

    public function menosVolume() { // Retira mais 10 ao volume atual 
        if (!$this->getLigado()) {
            echo "<p>O controle precisa estar ligado para realizar essa operação.</p>";
            return;
        }

        if ($this->getVolume() > 0) {
            $this->setVolume($this->getVolume() - 10);
        }
    }

    public function ligarMudo() { // Define o valor do volume atual para 0
        if (!$this->getLigado()) {
            echo "<p>O controle precisa estar ligado para realizar essa operação.</p>";
            return;
        }

        if ($this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function desligarMudo() { // Define o valor do volume atual para 50
        if (!$this->getLigado()) {
            echo "<p>O controle precisa estar ligado para realizar essa operação.</p>";
            return;
        }

        if ($this->getVolume() === 0) {
            $this->setVolume(50);
        }
    }

    public function play() { // Altera o estado do conteúdo para tocando
        if (!$this->getLigado()) {
            echo "<p>O controle precisa estar ligado para realizar essa operação.</p>";
            return;
        }

        if (!$this->getTocando()) {
            $this->setTocando(true);
        }
    }   

    public function pause() { // Altera o estado do conteúdo para pausado
        if (!$this->getLigado()) {
            echo "<p>O controle precisa estar ligado para realizar essa operação.</p>";
            return;
        }

        if ($this->getTocando()) {
            $this->setTocando(false);
        }
    }
    
    #endregion
}
?>