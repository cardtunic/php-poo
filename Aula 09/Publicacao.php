<?php
interface Publicacao {
    public function abrir();
    public function fechar();
    public function folhear(int $paginaFinal);
    public function avancarPag();
    public function voltarPag();
}
?>