<?php
    class Pendrive {
        // ATRIBUTOS

        public $modelo;
        public $armazenamento;
        public $velocidade_gravacao;
        public $velocidade_leitura;
        public $tipo_usb;
        public $conectado;
        public $ejetado;

        // MÉTODOS

        function conectar(){ // Conecta o pendrive, mudando o estado de ejetado para falso, e conectado para verdadeiro
            echo "<p>Conectando Pendrive a porta USB...</p>";

            $this->ejetado = false;
            $this->conectado = true;

            echo "<p>[PENDRIVE CONECTADO]</p>";
        }
        function ejetar(){ // Ejeta o pendrive, caso esteja conectado, para que seja desconectado com segurança, mudando o estado de ejetado para verdadeiro
            echo "<p>Ejetando Pendrive...</p>";

            if ($this->conectado) {
                $this->ejetado = true;
                echo "<p>[O PENDRIVE PODE SER DESCONECTADO]</p>";
            } else {
                echo "<p>[ERRO] O pendrive não pode ser ejetado, pois não está conectado.</p>";
            }
        }
        function desconectar(){ // Desconecta o pendrive, caso esteja ejetado, mudando o estado de conectado para falso
            echo "<p>Desconectando Pendrive da porta USB...</p>";
            
            if ($this->ejetado) {
                $this->conectado = false;
                echo "<p>[PENDRIVE DESCONECTADO]</p>";
            } else {
                echo "<p>[ERROR] O pendrive não pode desconectado sem antes ser ejetado!</p>";
            }
        }

        function ler(){ // Ler arquivos, caso o pendrive esteja conectado e não ejetado
            if ($this->conectado && !$this->ejetado) {
                echo "<p>Lendo arquivo...</p>";
            } else {
                echo "[ERRO] O pendrive precisa estar conectado para ler arquivos!";
            }
        }
        function gravar(){ // Grava arquivos, caso o pendrive esteja conectado e não ejetado
            if ($this->conectado && !$this->ejetado) {
                echo "<p>Gravando arquivo...</p>";
            } else {
                echo "[ERRO] O pendrive precisa estar conectado para gravar arquivos!";
            }
        }
    }
?>