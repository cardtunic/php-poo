<?php
require_once("Publicacao.php");
require_once("Pessoa.php");

class Livro implements Publicacao
{
    #region ATRIBUTOS

    private string $titulo;
    private string $autor;
    private int $totPaginas;
    private int $pagAtual;
    private bool $aberto;
    private Pessoa $leitor;

    #endregion

    function __construct( // Instancia a classe atribuindo alguns parâmetros e definindo o livro como fechado, na página nicial 1.
        string $titulo,
        string $autor,
        int $totPaginas,
        Pessoa $leitor
    ) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;

        $this->aberto = false;
        $this->pagAtual = 1;
    }

    #region Getters
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function getTotPaginas(): int
    {
        return $this->totPaginas;
    }

    public function getPagAtual(): int
    {
        return $this->pagAtual;
    }

    public function getAberto(): bool
    {
        return $this->aberto;
    }

    public function getLeitor(): Pessoa
    {
        return $this->leitor;
    }
    #endregion

    #region Setters
    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function setAutor(string $autor)
    {
        $this->autor = $autor;
    }

    public function setTotPaginas(int $totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    public function setPagAtual(int $pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto(bool $aberto)
    {
        $this->aberto = $aberto;
    }

    public function setLeitor(Pessoa $leitor)
    {
        $this->leitor = $leitor;
    }
    #endregion

    #region MÉTODOS PÚBLICOS

    public function detalhes() // Mostra na tela os detalhes do livro: título, autor, total de páginas e quem está lendo.
    {
        $leitor = $this->getLeitor();

        echo "
            <h3>{$this->getTitulo()}</h3>
            <p><strong>Autor:</strong> {$this->getAutor()}</p>
            <p><strong>Total de páginas:</strong> {$this->getTotPaginas()}</p>
            <p><strong>Página atual:</strong> {$this->getPagAtual()}</p>
            <p><strong>Sendo lido por {$leitor->getNome()}.</strong></p>
        ";
    }

    public function abrir() // Muda o estado do livro para aberto mudando o atributo $aberto para verdadeiro
    {
        if (!$this->getAberto()) {
            $this->setAberto(true);
            echo "<p>O livro foi aberto.</p>";
        }
    }

    public function fechar() // Muda o estado do livro para fechado mudando o atributo $aberto para falso
    {
        if ($this->getAberto()) {
            $this->setAberto(false);
            echo "<p>O livro foi fechado.</p>";
        }
    }

    public function folhear(int $paginaFinal) // Folhea o livro partindo da página um até uma página informada ($paginaFinal)
    {
        if (!$this->getAberto()) {
            echo "<p error=\"error\">Você não poder folhear um livro que está fechado!</p>";
            return;
        }

        if ($paginaFinal > $this->getTotPaginas() || $paginaFinal < 0) {
            echo "<p error=\"error\">Você não poder folhear até a página $paginaFinal, o livro tem somente {$this->getTotPaginas()} páginas.</p>";
            return;
        }

        $this->setPagAtual($paginaFinal);
        echo "<p>Você folheou o livro até a página $paginaFinal.<p>";
    }

    public function avancarPag() // Adiciona 1 a $pagAtual
    {
        if (!$this->getAberto()) {
            echo "<p error=\"error\">Você não poder folhear um livro que está fechado!</p>";
            return;
        }

        if ($this->getPagAtual() !== $this->totPaginas) {
            $this->setPagAtual($this->getPagAtual() + 1);
            echo "<p>Você avançou uma página, agora está na página {$this->getPagAtual()}.</p>";
        }
    }

    public function voltarPag() // Remove 1 a $pagAtual
    {
        if (!$this->getAberto()) {
            echo "<p error=\"error\">Você não poder folhear um livro que está fechado!</p>";
            return;
        }

        if ($this->getPagAtual() !== 0) {
            $this->setPagAtual($this->getPagAtual() - 1);
            echo "<p>Você voltou uma página, agora está na página {$this->getPagAtual()}.</p>";
        }
    }

    #endregion
}
