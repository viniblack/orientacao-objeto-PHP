<?php


use Alura\Banco\Model\{CPF, Endereco};
use Alura\Banco\Model\Conta\{Conta, Titular, ContaPoupanca, contaCorrente};

require_once 'autoload.php';

$conta = new Conta(
  new Titular(
    new CPF('123.456.789-10'),
    'Vinicius',
    new Endereco('Petrópolis', 'bairro Teste', 'Rua teste', '38')
  )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
