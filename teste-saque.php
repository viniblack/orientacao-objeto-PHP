<?php

use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Conta\ContaPoupanca;

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
