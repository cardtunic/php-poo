<?php
class ContaBancaria
{
    #region ATRIBUTOS

    private $titular;
    private $agencia;
    private $numeroConta;
    private $tipoConta;
    private $saldo;
    private $status;

    #endregion

    #region MÉTODOS ESPECIAIS

    function __construct()
    {
        $this->setSaldo(0); // Define o saldo inicial ao criar a conta
        $this->setStatus(false); // Define a conta como aberta
    }

    #region Getters

    function getSaldo()
    {
        return $this->saldo;
    }

    function getTitular()
    {
        return $this->titular;
    }

    function getAgencia()
    {
        return $this->agencia;
    }

    function getNumeroConta()
    {
        return $this->numeroConta;
    }

    function getTipoConta()
    {
        return $this->tipoConta;
    }

    function getStatus()
    {
        return $this->status;
    }

    #endregion

    #region Setters

    function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    function setTitular($titular)
    {
        $this->titular = $titular;
    }

    function setAgencia($agencia)
    {
        $this->agencia = $agencia;
    }

    function setNumeroConta($numeroConta)
    {
        $this->numeroConta = $numeroConta;
    }

    function setTipoConta($tipoConta)
    {
        $this->tipoConta = $tipoConta;
    }

    function setStatus($status)
    {
        $this->status = $status;
    }

    #endregion

    #endregion

    #region MÉTODOS PÚBLICOS

    public function consultarSaldo()
    { // Retorna o saldo atual da conta
        if (!$this->getStatus()) {
            echo "<p>[ERRO] Sua conta está fechada, não é possível realizar operações.</p>";
            return;
        }

        echo "<p>O saldo atual da sua conta é de R$ {$this->getSaldo()}</p>";
    }

    public function depositar($valor)
    { // Deposita determinado valor na conta
        if (!$this->getStatus()) {
            echo "<p>[ERRO] Sua conta está fechada, não é possível realizar operações.</p>";
            return;
        }

        $novoSaldo = $this->getSaldo() + $valor;
        $this->setSaldo($novoSaldo);

        echo "<p>Foram depositados R$ $valor, seu saldo atual é de R$ $novoSaldo</p>";
    }

    public function sacar($valor)
    { // Saca determinado valor da conta, se houver saldo suficiente
        if (!$this->getStatus()) {
            echo "<p>[ERRO] Sua conta está fechada, não é possível realizar operações.</p>";
            return;
        }

        $novoSaldo = $this->getSaldo() - $valor;

        if ($novoSaldo >= 0) {
            $this->setSaldo($novoSaldo);
            echo "<p>Foram sacados R$ $valor, seu atual saldo é de R$ $novoSaldo</p>";
        } else {
            echo "<p>[ERRO] Não é possível sacar esse valor, você não tem saldo suficiente (saldo atual: R$ {$this->getSaldo()})!</p>";
        }
    }

    public function fecharConta()
    { // Fecha a conta caso não haja nenhum saldo ou débitos
        if ($this->getSaldo() > 0) echo "<p>[ERRO] Você não pode fechar sua conta, precisa sacar os R\${$this->getSaldo()} antes!</p>";
        else if ($this->getSaldo() < 0) echo "<p>[ERRO] Você não pode fechar sua conta com débito!</p>";
        else echo "<p>Sua conta foi fechada com sucesso.</p>";
    }

    public function abrirConta($titular, $agencia, $numeroConta, $tipoConta)
    { // Abre uma conta com base nos parâmetros passados
        if ($this->getStatus()) {
            echo "<p>[ERRO] Sua conta já está aberta!</p>";
            return;
        }

        $tipoConta = strtoupper($tipoConta);

        // Checagem de tipos de conta

        if ($tipoConta === "CP") {
            $this->setTipoConta($tipoConta);
            $this->setSaldo(150);
        } else if ($tipoConta === "CC") {
            $this->setTipoConta($tipoConta);
            $this->setSaldo(50);
        } else {
            echo "<p>[ERRO] Você só pode criar uma conta corrente ou poupança. Use CC para corrente e CP para poupança!</p>";
            return;
        }

        // Definição dos valores dos atributos da conta

        $this->setStatus(true);
        $this->setTitular($titular);
        $this->setAgencia($agencia);
        $this->setNumeroConta($numeroConta);

        // Mostra na tela as informações da conta recém-criada

        echo "
            <h2>{$this->getTitular()}, sua conta foi aberta com sucesso!</h2>
            
            <p>Tipo de conta: {$this->getTipoConta()}</p>
            <p>Agência: {$this->getAgencia()}</p>
            <p>N° da conta: {$this->getNumeroConta()}</p>
            <p>Saldo atual: R\${$this->getSaldo()}</p>
        ";
    }

    public function pagarMensal()
    { // Retira do saldo o valor equivalente da taxa de mensal de manuntenção da conta
        if (!$this->getStatus()) {
            echo "<p>[ERRO] Sua conta está fechada, não é possível realizar operações.</p>";
            return;
        }

        $valorTaxa = $this->getTipoConta() === "CC" ? 12 : 20;
        $novoSaldo = $this->getSaldo() - $valorTaxa;

        $this->setSaldo($novoSaldo);

        echo "<p>O valor de R$ $valorTaxa relativo a taxa mensal para manunteção da sua conta foi retirado do seu saldo.</p>";
    }

    #endregion
}
