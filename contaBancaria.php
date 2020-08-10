<?php

declare(strict_types = 1);

// Classe

class contaBancaria {
    private $banco;
    private $nomeTitular = 'Gustavo A. Theo';
    private $conta = '00112';
    private $agencia;

    public function obterSaldo() { // Retornar saldo
        return $this-> saldo;
    }

    public function __construct(
        string $banco, 
        string $nomeTitular, 
        int $agencia, 
        int $conta) { 
        $this->banco = $banco;
        $this->nomeTitutar = $nomeTitular;
        $this->conta = $conta;
        $this->agencia = $agencia;
    }

    public function depositar($valor) {
        $this -> saldo += valor;
    }

    public function saldo($valor) {
        $this -> saldo -= valor;
    }
}   

// Criar instância: new <Nome>();

    /* Declarar modificador de acesso : Define a visibilidade
   public, private, protected */

var_dump($conta->obterSaldo());

$conta->$agencia = '112222';

// Public: Qualquer um acessa
// Private: Não é acessível
// Protected: Informação protegida

// Acesso aos atributos

exit();

$conta = new contaBancaria(
    'Banco do Brasil',
    'Antonio Alves',
    '123',
    '4567-890',
    '399.99'
);

echo $conta->obterSaldo();

$conta -> depositar(300);

// PHP_EOL: Separador no terminal

echo $conta->obterSaldo();


