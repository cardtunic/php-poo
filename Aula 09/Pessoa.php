<?php
class Pessoa
{
    #region ATRIBUTOS

    private string $nome;
    private int $idade;
    private string $sexo;

    #endregion

    function __construct(string $nome, int $idade, string $sexo)
    { // Instacia a classe verificando se o sexo passado é valido e atribui os parâmetros passados
        if ($sexo !== "M" && $sexo !== "F" && $sexo !== "NB") {
            echo "
            <p class=\"error\">Informe um valor para sexo válido:</p>
            <p>M - Masculino</p>
            <p>F- Feminino</p>
            <p>NB - Não binário</p>
            ";
            return;
        }

        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    #region Getters
    public function getNome(): string
    {
        return $this->nome;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function getSexo(): string
    {
        return $this->sexo;
    }
    #endregion

    #region Setters
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function setIdade(int $idade)
    {
        $this->idade = $idade;
    }

    public function setSexo(string $sexo)
    {
        $this->sexo = $sexo;
    }
    #endregion

    #region MÉTODOS PÚBLICOS
    public function fazerAniver()
    { // Adiciona 1 a idade atual da pessoa
        $this->setIdade($this->getIdade() + 1);

        echo "<p>A pessoa {$this->getNome()} fez aniversário! Agora ela tem {$this->getIdade()}.</p>";
    }
    #endregion
}
