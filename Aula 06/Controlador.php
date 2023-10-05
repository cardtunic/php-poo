<?php

// Declaração da interface Controlador

interface Controlador {
    public function ligar();
    
    /*
    Em uma interface todos os métodos são públicos e automáticamente abstratos,
    visto que a função dela é expor para o exterior métodos de uma classe que sobrescreve
    os métodos aqui declarados, implemetando-os.
    */
    
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();
}
?>